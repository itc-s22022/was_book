#!/usr/bin/perl
use utf8;  # PerlソースをUTF-8でエンコードするという指定
use strict;  # 変数を厳格に宣言するという指定
use CGI qw/-no_xhtml :standard/;  # CGIモジュールの使用

my $cgi = new CGI;
my $url = $cgi->param('url');

# URLの先頭一致検索でオープンリダイレクタ対策(不十分な対策)
if ($url =~ /^http:\/\/example\.jp\//) {
  print "Location: $url\n\n";
  exit 0;
}
## URLが不正の場合のエラーメッセージ
print <<END_OF_HTML;
Content-Type: text/html; charset=UTF-8

<body>
Bad URL
</body>
END_OF_HTML

