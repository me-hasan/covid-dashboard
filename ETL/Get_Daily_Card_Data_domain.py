#!/usr/bin/python3

import requests
import json
import pymysql

# response = requests.get('http://103.247.238.92/webportal/api/get_corona_data.php')
response = requests.get('http://dashboard.dghs.gov.bd/webportal/api/get_corona_data.php')


if response.status_code == 200:
    print("API Connected..")
    response = response.text
    result = json.loads(response)
    print(result)
    # exit()
    con1 = pymysql.connect(host ='localhost',user = 'national_dash_user',passwd = 'Covid2$0Egen!Dash',db = 'national_dashboard')
    cursor1 = con1.cursor()

    cursor1.execute("INSERT INTO daily_data (report_date,infected_24_hrs,infected_total,recovered_24_hrs,recovered_total,death_24_hrs,death_total,test_24_hrs,test_total) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s)",
                   (result["report_date"], result["infected_24_hrs"], result["infected_total"], result["recovered_24_hrs"], result["recovered_total"], result["death_24_hrs"], result["death_total"],
                   result["test_24_hrs"], result["test_total"]))
    con1.commit()
    print("Data Load Complete!")
    con1.close()
    print("Success!!")

else:
    print("No New data available..")
    exit()



