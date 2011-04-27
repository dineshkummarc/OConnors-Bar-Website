/**
 * $Id: editor_plugin_src.js 42 2006-08-08 14:32:24Z spocke $
 *
 * @author Moxiecode
 * @copyright Copyright © 2004-2007, Moxiecode Systems AB, All rights reserved.
 */

(function() {
	function getParam(n, d) {
		if (tinyMCE.getParam)
			return tinyMCE.getParam(n, d);
		else
			return tinyMCE.activeEditor.getParam(n, d);
	};

	var TinyMCE_FileManagerPlugin = {
		getInfo : function() {
			return {
				longname : 'MCFileManager PHP',
				author : 'Moxiecode Systems AB',
				authorurl : 'http://tinymce.moxiecode.com',
				infourl : 'http://tinymce.moxiecode.com/paypal/item_filemanager.php',
				version : "3.0.9.1"
			};
		},

		initInstance : function(inst) {
			inst.settings['file_browser_callback'] = 'mcFileManager.filebrowserCallBack';
			mcFileManager.settings.handle = getParam('filemanager_handle', mcFileManager.settings.handle);
		},

		getControlHTML : function(cn) {
			switch (cn) {
				case "insertfile":
					return tinyMCE.getButtonHTML(cn, 'lang_filemanager_insertfile_desc', '{$pluginurl}/pages/fm/img/insertfile.gif', 'mceInsertFile', false);
			}

			return "";
		},

		execCommand : function(editor_id, element, command, user_interface, value) {
			var inst = tinyMCE.getInstanceById(editor_id), nl, i, t = this, h, s;

			value = value || {};

			if (!value.template)
				value.template = getParam('filemanager_insert_template', '<a href="{$url}" mce_href="{$url}">{$name}</a>');

			function getAttrib(e, n) {
				if (tinyMCE.getAttrib)
					return tinyMCE.getAttrib(e, n);

				return inst.dom.getAttrib(e, n);
			};

			switch (command) {
				case "mceInsertFile":
					s = {
						path : value.path || getParam("filemanager_path"),
						rootpath : value.rootpath || getParam("filemanager_rootpath"),
						remember_last_path : value.remember_last_path != undefined ? value.remember_last_path : getParam("filemanager_remember_last_path"),
						custom_data : getParam("filemanager_custom_data"),
						insert_filter : getParam("filemanager_insert_filter")
					};

					mcFileManager.open(0, '', '', function(url, info) {
						if (!inst.selection.isCollapsed()) {
							inst.execCommand("createlink", false, "javascript:mce_temp_url();");

							if (tinyMCE.selectElements) {
								nl = tinyMCE.selectElements(inst.getBody(), 'A', function(n) {
									return getAttrib(n, 'href') == "javascript:mce_temp_url();";
								});
							} else
								nl = tinymce.grep(inst.dom.select('A'), function(n) {return getAttrib(n, 'href') == "javascript:mce_temp_url();";});

							for (i=0; i<nl.length; i++)
								nl[i].href = url;
						} else {
							h = t._replace(
								value.template,
								info,
								{
									urlencode : function(v) {
										return escape(v);
									},

									xmlEncode : function(v) {
										if (tinyMCE.xmlEncode)
											return tinyMCE.xmlEncode(v);
										else
											return tinymce.DOM.encode(v);
									}
								}
							);

							if (tinyMCE.storeAwayURLs)
								h = tinyMCE.storeAwayURLs(h);

							inst.execCommand('mceInsertContent', false, h);
						}
					}, s);

					return true;
			}

			return false;
		},

		/* Plugin internal functions */

		_init2x : function() {
			var tm = window['realTinyMCE'] || tinyMCE;

			this._loadScript(tm.baseURL + '/plugins/filemanager/js/mcfilemanager.js');

			// Load language pack only with new compressor or no compressor at all
			if (!window['realTinyMCE'])
				this._loadScript(tm.baseURL + '/plugins/filemanager/language/index.php?type=fm&format=tinymce&group=tinymce&prefix=filemanager_');

			tinyMCE.addPlugin("filemanager", TinyMCE_FileManagerPlugin);
		},

		_init3x : function() {
			var p = TinyMCE_FileManagerPlugin, base = (tinymce.PluginManager.urls['filemanager'] || (tinymce.baseURL + '/plugins/filemanager'));

			tinymce.ScriptLoader.load(base + '/js/mcfilemanager.js');
			tinymce.ScriptLoader.load(base + '/language/index.php?type=fm&format=tinymce_3_x&group=tinymce&prefix=filemanager_');

			if (window.mcFileManager)
				mcFileManager.baseURL = base + '/js';

			tinymce.create('tinymce.plugins.FileManagerPlugin', {
				FileManagerPlugin : function(ed, url) {
					ed.onInit.add(function() {
						p.initInstance(ed);
					});

					ed.addCommand('mceInsertFile', function(u, v) {
						p.execCommand(ed.id, 0, 'mceInsertFile', u, v);
					});

					this.editor = ed;
				},

				getInfo : function() {
					return TinyMCE_FileManagerPlugin.getInfo();
				},

				createControl: function(n, cm) {
					var c, ed = this.editor, v;

					switch (n) {
						case 'insertfile':
							v = getParam('filemanager_insert_template');

							if (v instanceof Array) {
								c = cm.createMenuButton('insertfile', {
									title : 'filemanager_insertfile_desc',
									image : base + '/pages/fm/img/insertfile.gif',
									icons : false
								});

								c.onRenderMenu.add(function(c, m) {
									tinymce.each(v, function(v) {
										m.add({title : v.title, onclick : function() {
											ed.execCommand('mceInsertFile', false, v);
										}});
									});
								});
							} else {
								c = cm.createButton('insertfile', {
									title : 'filemanager_insertfile_desc',
									image : base + '/pages/fm/img/insertfile.gif',
									onclick : function() {
										ed.execCommand('mceInsertFile', false, {template : v});
									}
								});
							}

							return c;
					}

					return null;
				}
			});

			tinymce.PluginManager.add('filemanager', tinymce.plugins.FileManagerPlugin);
		},

		_loadScript : function(u) {
			var s, d = document;

			/*s = d.createElement('script');
			s.setAttribute('type', 'text/javascript');
			s.setAttribute('src', u);
			d.getElementsByTagName('head')[0].appendChild(s);*/

			document.write('<script type="text/javascript" src="' + u + '"></script>');
		},

		_replace : function(t, d, e) {
			var i, r;

			function get(d, s) {
				for (i=0, r=d, s=s.split('.'); i<s.length; i++)
					r = r[s[i]];

				return r;
			};

			// Replace variables
			t = '' + t.replace(/\{\$([^\}]+)\}/g, function(a, b) {
				var l = b.split('|'), v = get(d, l[0]);

				// Default encoding
				if (l.length == 1 && e && e.xmlEncode)
					v = e.xmlEncode(v);

				// Execute encoders
				for (i=1; i<l.length; i++)
					v = e[l[i]](v, d, b);

				return v;
			});

			// Execute functions
			t = t.replace(/\{\=([\w]+)([^\}]+)\}/g, function(a, b, c) {
				return get(e, b)(d, b, c);
			});

			return t;
		}
	};

	if (tinyMCE.majorVersion)
		TinyMCE_FileManagerPlugin._init2x();
	else
		TinyMCE_FileManagerPlugin._init3x();
})();
