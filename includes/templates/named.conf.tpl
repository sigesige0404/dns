// define acls
acl io-office {
        211.120.237.215/32;
        211.120.237.141/32;
        211.120.237.149/32;
        211.130.251.148/32;
        219.96.175.76/32;
        211.120.237.159/32;
        211.120.237.145/32;
};
acl io-dns {
        192.168.72.8/32;
};
acl io-71 {
        192.168.71.0/24;
};
acl io-91 {
        192.168.91.0/24;
};
acl io-100 {
        10.100.0.0/16;
};
acl io-101 {
        10.101.0.0/16;
};
acl io-110 {
        10.110.0.0/16;
};
acl io-111 {
        10.111.0.0/16;
};
acl io-120 {
        192.168.120.0/24;
};
acl io-172 {
        172.20.0.0/16;
};
acl io-211 {
        219.127.211.128/26;
};
acl io-220 {
        219.127.220.0/25;
};
acl io-301 {
        10.112.1.0/24;
};
acl io-822 {
        192.168.220.0/24;
};
acl io-823 {
        192.168.230.0/24;
};
acl io-825 {
        192.168.250.0/24;
};
acl io-global {
        210.175.226.253/32;
        210.175.230.0/25;
        219.127.221.128/25;
        210.175.234.0/25;
        210.175.229.0/27;
        210.175.232.32/27;

};
acl ginoza-cumo {
        183.81.176.234;
        183.81.176.235;
        183.81.176.236;
        183.81.176.237;
        183.81.176.238;
};
acl solnet {
        220.110.221.104;
        220.110.221.105;
        220.110.221.106;
        220.110.221.107;
        220.110.221.108;
        220.110.221.109;
        220.110.221.110;
        220.110.221.111;
};
acl dainfra {
        210.175.227.96/27;
};
acl tairanet {
        192.168.100.0/24;
};
acl io-internal {
        io-office;
        io-71;
        io-91;
        io-100;
        io-101;
        io-110;
        io-111;
        io-120;
        io-172;
        io-211;
        io-220;
        io-301;
        io-822;
        io-823;
        io-825;
        io-global;
        localhost;
        ginoza-cumo;
        solnet;
        dainfra;
        tairanet;
};

// initial settings
options {
        directory "/var/named";
        dump-file "/var/named/data/cache_dump.db";
        statistics-file "/var/named/data/named_stats.txt";
        dnssec-enable no;
        dnssec-validation no;
        allow-transfer {
                io-dns;
        };
        allow-recursion {
                io-internal;
        };
        also-notify { 192.168.100.100; };
};
key "rndckey" {
      algorithm hmac-md5;
      secret "jKoB7f6xqCuvKZ+q4yIAFg==";
};

controls {
     inet 127.0.0.1 port 953
              allow { 127.0.0.1; } keys { "rndckey"; };
};
logging {
        channel default-log {
                file "/var/log/named/namedlog" versions 5 size 1m;
                severity info;
                print-time yes;
                print-category yes;
        };
        category default {
                default-log;
        };
        category lame-servers {
                null;
        };
};

// statics
zone "localhost" {
        type master;
        file "localhost.zone";
};
zone "0.0.127.in-addr.arpa" {
        type master;
        file "localhost.rev";
};
zone "." IN {
        type hint;
        file "named.root";
};

// define forward lookup
zone "indexokinawa" IN {
        check-names ignore;
        type master;
        file "indexokinawa.zone";
};
