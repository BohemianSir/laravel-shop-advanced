<?php

return [
    'alipay' => [
        'app_id'         => '2016092300575708',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA1kR41dTYJKLU+Rp3nw6709aNCayFxTyYpa7NYehRA7CGBA8asu4BVBr38UmXj+148J/0ZZL9rw5g6Zzx6p668nqzwz+WmeLVOM/WvUvUSsFxMjazDWQ58CnGHQ0dvtcJHgeiEe5R9URFO9RKTiwueYLbXi0jK38LQCV2/e7AoViVQWaNjD6bJsyLKD1Af7YtWuOXv7jmoyq6QfToVEYcKV2s17yEuM6KOVN/PUaHrU/YVuZVeq+giTVOYj/GFLIBp8RbPFG+YfSQLf1JJU8uzP3KQdCRvn4FrgtNIVP186rFUYaz/vYyJBR7rosCn3ito13XU72OZb0pzQyPI1gIKQIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAqOlJWoOAa7k8oisUeuXx5IVPb2UD1yJyK9tCNMHcpoC7NOF5/rD1v+GlUjgMBQBws+CNdyvylFt6tP7oDXiybQijSI34rRsgHoZ/KnlaXHg/x+/pj471NWc4G1Qgi7j/LaLHSpkg2L3oEZir43l8RstxW5ing53kMSGXNoYtDOmjoqeKGr6sSpM14BLzSdwKksIKs86M8isQHNvutmVCAmRN/tXo9NaLUAin/sFF3o5toUufno44ovwnemJEE0hlHfaCezh00++TY70AlvDo4POG82WSUIfv6J4YSPinLzLkuAcAVkFGZK38ugBoiD8UI+6LqRa+fkeBUZzh7x7qDQIDAQABAoIBABgyMtvQcpj70/+3BBwGzHvbzOE8KyyqNoipw/YivyTq0+ZjVkJxvwJZpID+nlopEfvyctFbbkhqQk2jJkKnw4dy8VD3ZWQGurcktRq0f4k3gIt3hpGV/PJFcvgXOQJK4eL7qmi5PsdNjOzYXeccA/1wLzDb0UM9Xu7azPp2hgWPRrwBidVl/asBuYFrLk4WcvTYsRDo1G4J53/SX9wA/RgaiqYuANUhdc3DfX1o9N2jZlylhJo6rl/p5uHB81jEhTsPlWR97onfgb9OuRiUPB972r5gBIJ6PtMwzCfmxt8U7Cas0dWNYNjoIMwBWnMxe5uyfqVVHC4GYzqItno3F9ECgYEA3WmY8rytHlXFm1T0ottE86xazpvvDv2VLzRpSY9Qlh4s2NnYr8Vzb0Lv3sTwUptbAO+If9lcTXN2ABhurg07jgmVVovnz3Mc2fj32JKJ3A2agMSUy/j/SpW/DtChmHt1s3QvF98QfCnvQDm1tFIgFx9e8GXca7Mmzlaejf9WRo8CgYEAw0wjQ/QpP9TAZD9K0xHbA9S+HZ4X2PSFlZlRKuxgAzso4CC3qQLSZUMNyi7XirKPRB334e5x7fNqe0VZ3mAmaxs6p9eqAVWIWF9N7QbEEoFS2u2fSPI8la/QVGLFsYBC1KvECt5lvDScONfuCC9ASf4tX+4n2TKt6uk3PNeGs6MCgYEAxDZ2Ynat/DoKmnMZMNGcM01EU+CAZAp5kJGj1Jp60e3/1FSJ4Ircl3b8V7CzQKGIbjXYA2S+layCn+cG/pufcWowu7fUQFVE9i3ahkSmgypTB1Yufuw0YQZ/gEOHUTfnwJZvvXnihAYtjf8Wdaxp39PfMK80PQVQmH7OmAv1iyUCgYEAtIIE/mQIVEUyZfXSFPCl/A6AgiODazXm2nTQ/tlnjNT7XN0gpAhFqu6lKkDNXBbaMF16pcqcZxDbVICvJci8+bY7KrM9IOqLkRLVlcTxKSF7EXscBHJQ6RGNftGkZAFmw+bW1izk32XJFwkNq2bxBvL1wXsAPdKHyV4xffy/Nf0CgYEAgCcnCowYzdF1XBVd1ABNfzHeiVKK7qvW/f/DG0ixOpBVFggMherRaDdyGQV3raJ63on/aR1cKnTHICbxT0g0hIv4xFFuM5LWkiIc8lcnOi4zoTKpFoSoZAVyv51wtMmeFYWGuhxvGaQt0v57wserDFuyXJuffdY8V8RSRElAvXI=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
