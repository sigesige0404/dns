$TTL 3600
@       IN      SOA     {dns_server_1} {dns_hostmaster} (
                        {serial}                        ; Serial
                        10800                           ; Refresh
                        3600                            ; Retry
                        604800                          ; Expire
                        3600 )                          ; Minimum

                NS      {dns_server_1}                 ; name server
                NS      {dns_server_2}                 ; name server
