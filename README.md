Access log analyzer " http access_log". You need to write a php script that processes this log and outputs information about it in JSON format. Required data: number of hits/views, number of unique URLs, traffic volume, total number of rows, number of requests from search engines, response codes.

Example of running the script #!/bin/bash

php parser.php --file=./access.log

Result { "views": 16, "URL": 5, "traffic": 212816, "scanner": { "Google": 2, "Yandex": 0, "Bing": 0, "Baidu": 0 }, "status_codes": { "200": 14, "301": 2 } }
