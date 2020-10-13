#!/usr/bin/python3

import requests
import json
import pymysql

response = requests.get('http://103.247.238.92/webportal/api/get_corona_data.php')
#result = json.loads(response.text)

print(response.text)

