parse_url = function (str, component) { // eslint-disable-line camelcase
  var query
  var mode = (typeof require !== 'undefined' ? require('../info/ini_get')('locutus.parse_url.mode') : undefined) || 'php'
  var key = [
    'source',
    'scheme',
    'authority',
    'userInfo',
    'user',
    'pass',
    'host',
    'port',
    'relative',
    'path',
    'directory',
    'file',
    'query',
    'fragment'
  ]
  // For loose we added one optional slash to post-scheme to catch file:/// (should restrict this)
  var parser = {
    php: new RegExp([
      '(?:([^:\\/?#]+):)?',
      '(?:\\/\\/()(?:(?:()(?:([^:@\\/]*):?([^:@\\/]*))?@)?([^:\\/?#]*)(?::(\\d*))?))?',
      '()',
      '(?:(()(?:(?:[^?#\\/]*\\/)*)()(?:[^?#]*))(?:\\?([^#]*))?(?:#(.*))?)'
    ].join('')),
    strict: new RegExp([
      '(?:([^:\\/?#]+):)?',
      '(?:\\/\\/((?:(([^:@\\/]*):?([^:@\\/]*))?@)?([^:\\/?#]*)(?::(\\d*))?))?',
      '((((?:[^?#\\/]*\\/)*)([^?#]*))(?:\\?([^#]*))?(?:#(.*))?)'
    ].join('')),
    loose: new RegExp([
      '(?:(?![^:@]+:[^:@\\/]*@)([^:\\/?#.]+):)?',
      '(?:\\/\\/\\/?)?',
      '((?:(([^:@\\/]*):?([^:@\\/]*))?@)?([^:\\/?#]*)(?::(\\d*))?)',
      '(((\\/(?:[^?#](?![^?#\\/]*\\.[^?#\\/.]+(?:[?#]|$)))*\\/?)?([^?#\\/]*))',
      '(?:\\?([^#]*))?(?:#(.*))?)'
    ].join(''))
  }
  var m = parser[mode].exec(str)
  var uri = {}
  var i = 14
  while (i--) {
    if (m[i]) {
      uri[key[i]] = m[i]
    }
  }
  if (component) {
    return uri[component.replace('PHP_URL_', '').toLowerCase()]
  }
  if (mode !== 'php') {
    var name = (typeof require !== 'undefined' ? require('../info/ini_get')('locutus.parse_url.queryKey') : undefined) || 'queryKey'
    parser = /(?:^|&)([^&=]*)=?([^&]*)/g
    uri[name] = {}
    query = uri[key[12]] || ''
    query.replace(parser, function ($0, $1, $2) {
      if ($1) {
        uri[name][$1] = $2
      }
    })
  }
  delete uri.source
  return uri
}

$(document).ready(function(){
    var url = document.location.href;
    var url_parse = parse_url(url);
    $('.nav > li').each(function(){
        var f = false;
        $(this).find('a').each(function(){
            if($(this).attr('href')== url_parse.path) f = true;
        });
        if(f) $(this).addClass('active');
    });
})
