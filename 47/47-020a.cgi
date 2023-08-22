#!/usr/bin/perl
use utf8;
use strict;
use CGI qw/-no_xhtml :standard/;

my $cgi = new CGI;
my $url = $cgi->param('url');

if ($url =~ /\Ahttp:\/\/example\.jp\/[-_.!~*'();\/?:@&=+\$,%#a-zA-Z0-9]+\z/) {
  print $cgi->redirect($url);
  exit 0;
}
print <<END_OF_HTML;
Content-Type: text/html; charset=UTF-8

<body>
Bad URL
</body>
END_OF_HTML
