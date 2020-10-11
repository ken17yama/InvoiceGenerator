
<div>
    <style>
        body {
            color: #212121;
        }
        h1{
            margin: 0 auto;
            text-align: center;
        }
        h2{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        ul, li{
            margin: 0;
            padding: 0;
            list-style: none;
        }
        table{
            border-collapse:collapse;
            border-top: 1px solid #333333;
            border-left: 1px solid #333333;
        }
        th{
            border-right: 1px solid #333333;
            border-bottom: 1px solid #333333;
        }
        td{
            border-right: 1px solid #333333;
            border-bottom: 1px solid #333333;
        }
        .partial{
            width: 100%;
            margin: 0 auto;
        }
        .total{
            width: 40%;
            margin-left: auto;
            border-top: none;
        }
    </style>
    <h1>請求書</h1>
    <div class="flex">
        <div style="float: left; width: 50%;">
            <ul>
                <li><span>株式会社やまだ</span>御中</li>
                <li>ご担当：<span>やまだ</span>様</li>
            </ul>
            <h2>件名：<span>請求書づくり</span></h2>
            <p>下記の通り。ご請求申し上げます。</p>
        </div>
        <div style="float: right; width: 50%;">
            <ul>
                <li>請求書No.<span>2020111</span></li>
                <li>請求日：<span>2020年12月09日</span></li>
            </ul>
            <ul>
                <li>やまざき株式会社</li>
                <li>千葉県浦安市舞浜1-1ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</li>
                <li>担当：<span>やまざき けんと</span></li>
                <li>TEL：<span>012-345-6789</span></li>
                <li>FAX：<span>012-345-6789</span></li>
                <li>E-Mail：<span>yamada@example.com</span></li>
            </ul>
        </div>
        <div style="clear: both; margin: 0pt; padding: 0pt; "></div>
    </div>
    <ul>
        <li>合計金額：￥<span>20,000</span>（税込）</li>
        <li>お支払期限：<span>2020年12月31日</span></li>
    </ul>
    <table class="partial">
        <tr>
            <th>No.</th>
            <th>内容</th>
            <th>数量</th>
            <th>単価</th>
            <th>金額</th>
        </tr>
        <tr>
            <td>1</td>
            <td>じゃがいも</td>
            <td>3</td>
            <td>50</td>
            <td>150</td>
        </tr>
        <tr>
            <td>2</td>
            <td>さつまいも</td>
            <td>2</td>
            <td>100</td>
            <td>200</td>
        </tr>
        <tr>
            <td>3</td>
            <td>さといも</td>
            <td>10</td>
            <td>25</td>
            <td>250</td>
        </tr>
    </table>
    <table class="total">
        <tr>
            <th>小計</th>
            <td>600</td>
        </tr>
        <tr>
            <th>消費税（<span>10%</span>）</th>
            <td>60</td>
        </tr>
        <tr>
            <th>合計</th>
            <td>660</td>
        </tr>
    </table>
    <p>ここは備考欄です。</p>
</div>
