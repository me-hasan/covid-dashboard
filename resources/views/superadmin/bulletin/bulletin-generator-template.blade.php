<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>

         
            /** 
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
            @page {
                margin: .3cm .3cm .2cm .3cm;
            }

            
            

            /** Define now the real margins of every page in the PDF **/
            body {
                margin-top: 3cm;
                margin-left: 2cm;
                margin-right: 2cm;
                margin-bottom: 2cm;
            }

            /** Define the header rules **/
            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2cm;
            }

            /** Define the footer rules **/
            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;
            }

            td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

         th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        /* Glyph, by Harry Roberts */

        hr.style-six {
            border: 0;
            height: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }
        img {
            height: 320px;
            width: 100%;
        }

        
        
        </style>


    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <div style="height: 115px">
               <img style="width:100%; height:125px" src="logo/pdfresizer.png" alt="" srcset="">
            </div>
            <br>
            <hr class="style-six">
        </header>

        <footer>
           <hr class="style-six">
            <div style="height: 45px">
               <div style="float: left; clear: right">
                    <img style="height: 40px; width:40px;" src="logo/a2i.png" alt="" srcset="">
                </div>
               <div style="float: right">
                   <h1 style="font-size:25px;font-weight:bold; float:right">সার্বিক সহযোগিতায়</h1>
                   <img style="height: 40px; width:auto;" src="logo/egen.png" alt="" srcset="">
               </div>
            </div>
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
        <table border="0" style="border-collapse: collapse; border-spacing: 0; margin : 80px auto 0px auto; width:100%">
            <tr>
                <td style="text-align:left">District Name: {{ $labelArray['district_name'] ?? '---' }}</td>
                <td style="text-align:right">Date: {{ $labelArray['date'] ?? '---' }}</td>
            </tr>
        <table>


        <div stayle="margin: 40px auto">
            <h3 style="font-size:14; color:#6DA641; padding-top: 50px">{{ $labelArray['fourth_chart']['title'] ?? '---' }}</h3>
            <img src="{{ $labelArray['fourth_chart']['path'] }}"  alt="chart3" >
        </div>

        <div stayle="margin: 40px auto">
            <h3 style="font-size:14; color:#6DA641; padding-top: 20px">{{ $labelArray['third_chart']['title'] ?? '---' }}</h3>
            <img  src="{{ $labelArray['third_chart']['path'] }}"  alt="chart2" >
        </div>

        <div stayle="margin: 40px auto">
            <h3 style="font-size:14; color:#6DA641; padding-top: 50px">{{ $labelArray['second_chart']['title'] ?? '---' }}</h3>
            <img  src="{{ $labelArray['second_chart']['path'] }}"  alt="chart1" >
        </div>

        <div stayle="margin: 40px auto">
            <h3 style="font-size:14; color:#6DA641; padding-top: 50px">{{ $labelArray['first_chart']['title'] ?? '---' }}</h3>
            {!! $labelArray['first_chart']['table'] ?? '---' !!}
        </div>

        </main>
    </body>
</html>
