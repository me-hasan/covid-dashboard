<html>
    <head>
        <style>

         
            /** 
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
            @page {
                margin: .2cm .2cm;
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
                height: 3cm;
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
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <div style="height: 115px">
               <img style="width: 100%; height="90px" padding: 5px 5px" src="logo/pdfresizer.png" alt="" srcset="">
            </div>
            <br>
            <hr class="style-six">
        </header>

        <footer>
           <hr class="style-six">
            <div style="height: 45px">
               <div style="float: left; clear: right"><img style="height: 40px; padding-left: 20px" src="logo/a2i.png" alt="" srcset=""></div>
               <div style="float: right">
                   <h1 style="font-size:25px;font-weight:bold; float:right">সার্বিক সহযোগিতায়</h1>
                   <img style="height: 40px; padding-right: 20px" src="logo/egen.png" alt="" srcset="">
               </div>
            </div>
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
        
        
        <h3 style="font-size:18; color:#6DA641; padding-top: 10px">Weekly Analysis of Covid-19 Indicators in Dhaka District (April 4 - April 10,2021)</h3>
        <table style="border-collapse: collapse; border-spacing: 0; margin : 80px auto 0px auto;">
            <thead>
                <tr>
                    <th>Covid-19 Indicators</th>
                    <th>2 weeks ago<br>(Mar 28-Apr 03)</th>
                    <th>Last Week<br>(Apr04-Apr-10)</th>
                    <th>Change</th>
                    <th>Dhaka Divison <br>(Last 2 weeks)</th>
                    <th>National <br>(Last 2 weeks)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tests (Non-Traveller)</td>
                    <td>62032</td>
                    <td>70939</td>
                    <td>+8907</td>
                    <td>158141</td>
                    <td>230453</td>
                </tr>
                <tr>
                    <td>Tests (Traveller)</td>
                    <td>10552</td>
                    <td>10756</td>
                    <td>+207</td>
                    <td>45296</td>
                    <td>133475</td>
                </tr>
                <tr>
                    <td>Cases (Non-Traveller)</td>
                    <td>22198</td>
                    <td>23323</td>
                    <td>+1125</td>
                    <td>52108</td>
                    <td>70118</td>
                </tr>
                <tr>
                    <td>Cases (Traveller)</td>
                    <td>1021</td>
                    <td>867</td>
                    <td>-154</td>
                    <td>3381</td>
                    <td>7814</td>
                </tr>
                <tr>
                    <td>Test Positivity (Non-Traveller)</td>
                    <td>35.78%</td>
                    <td>32.88%</td>
                    <td>-2.91%</td>
                    <td>32.95%</td>
                    <td>30.43%</td>
                </tr>
                <tr>
                    <td>Test Positivity (Traveller)</td>
                    <td>9.68%</td>
                    <td>8.06%</td>
                    <td>-1.62%</td>
                    <td>7.46%</td>
                    <td>5.85%</td>
                </tr>
                <tr>
                    <td>Deaths</td>
                    <td>138</td>
                    <td>227</td>
                    <td>+89</td>
                    <td>476</td>
                    <td>697</td>
                </tr>
                <tr>
                    <td>Unused Hospital Beds (General)</td>
                    <td>3541</td>
                    <td>2966</td>
                    <td>-575</td>
                    <td>14405</td>
                    <td>73332</td>
                </tr>
                <tr>
                    <td>Unused Hospital Beds (ICU)</td>
                    <td>25</td>
                    <td>30</td>
                    <td>+5</td>
                    <td>102</td>
                    <td>471</td>
                </tr>
            </tbody>
        </table>
        </main>
    </body>
</html>
