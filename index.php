<?php
  require("home.php");
  $index = new HomePage();
  $index->content .= "
<hr>
<h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">A message from Jaime Montoya, retail investor.</h2>

<hr>
<h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Jaime Montoya's Annualized Return (XIRR) Stock Portfolio Performance vs. NASDAQ-100 (QQQ), S&P 500 (SPY), and Dow Jones (DIA) from 12 November 2024 to 7 October 2026.</h2>
<div id=\"annualized-return-xirr\"></div>
<hr>
<h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Jaime Montoya's Total ROI Stock Portfolio Performance vs. NASDAQ-100 (QQQ), S&P 500 (SPY), and Dow Jones (DIA) from 12 November 2024 to 7 October 2026.</h2>
<div id=\"total-roi\"></div>
<hr>
<h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Jaime Montoya's Net Profit (USD) Stock Portfolio Performance vs. NASDAQ-100 (QQQ), S&P 500 (SPY), and Dow Jones (DIA) from 12 November 2024 to 7 October 2026.</h2>
<div id=\"net-profit\"></div>
<hr>
<h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Jaime Montoya's Stock Investments from 12 November 2024 to 7 October 2026 versus hypothetical investments of the same amounts on NASDAQ-100 (QQQ), S&P 500 (SPY), and Dow Jones (DIA).</h2>
<!-- Isolated Terminal Style Table Container Start -->
<div id=\"jaime-portfolio-terminal-table-root\"></div>
<script>
    (function() {
        const container = document.getElementById('jaime-portfolio-terminal-table-root');
        if (!container) return;
        
        // Create an isolated Shadow DOM boundary to block website CSS
        const shadow = container.attachShadow({ mode: 'closed' });
        
        shadow.innerHTML = `
            <style>
                :host {
                    display: block;
                    width: 100%;
                    margin: 20px 0;
                    box-sizing: border-box;
                }
                * {
                    box-sizing: border-box;
                }
                .table-wrapper {
                    width: 100%;
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                    background-color: #000000 !important;
                    padding: 10px;
                    border-radius: 4px;
                }
                table {
                    width: 100%;
                    border-collapse: collapse !important;
                    text-align: left;
                    font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif !important;
                    font-size: 14px !important;
                    line-height: 1.5 !important;
                    border: 1px solid #333333 !important;
                    background-color: #000000 !important;
                    color: #00ff00 !important;
                }
                th {
                    background-color: #111111 !important;
                    border-bottom: 2px solid #333333 !important;
                    padding: 12px !important;
                    font-weight: 600 !important;
                    color: #00ff00 !important;
                }
                tr {
                    border-bottom: 1px solid #222222 !important;
                }
                td {
                    padding: 12px !important;
                    vertical-align: middle !important;
                }
                .font-bold { font-weight: bold !important; }
                .font-italic { font-style: italic !important; }
                .indent-sub { padding-left: 24px !important; }
                .row-hypothetical {
                    background-color: #050505 !important;
                }
            </style>
            
            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>Category / Investment Strategy</th>
                            <th>Amount Invested</th>
                            <th>Net Profit (USD)</th>
                            <th>Total ROI</th>
                            <th>Annualized Return (XIRR)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=\"font-bold\">Jaime Montoya's stock portfolio</td>
                            <td class=\"font-bold\">$39,878.16</td>
                            <td class=\"font-bold\">+$10,009.49</td>
                            <td class=\"font-bold\">+25.10%</td>
                            <td class=\"font-bold\">+27.38%</td>
                        </tr>
                        <tr>
                            <td class=\"indent-sub\">&bull; <strong>NVIDIA (NVDA) Total</strong></td>
                            <td class=\"font-italic\">$39,619.36</td>
                            <td class=\"font-italic\">+$10,014.43</td>
                            <td class=\"font-italic\">+25.28%</td>
                            <td class=\"font-italic\">+27.51%</td>
                        </tr>
                        <tr>
                            <td class=\"indent-sub\">&bull; <strong>Amazon (AMZN) Total</strong></td>
                            <td class=\"font-italic\">$203.80</td>
                            <td class=\"font-italic\">-$0.08</td>
                            <td class=\"font-italic\">-0.04%</td>
                            <td class=\"font-italic\">-13.35%</td>
                        </tr>
                        <tr>
                            <td class=\"indent-sub\">&bull; <strong>Pfizer (PFE) Total</strong></td>
                            <td class=\"font-italic\">$55.00</td>
                            <td class=\"font-italic\">-$4.86</td>
                            <td class=\"font-italic\">-8.84%</td>
                            <td class=\"font-italic\">-17.55%</td>
                        </tr>
                        <tr class=\"row-hypothetical\">
                            <td class=\"font-bold\">NASDAQ-100 (QQQ)</td>
                            <td>$39,878.16</td>
                            <td class=\"font-bold\">+$5,592.12</td>
                            <td class=\"font-bold\">+14.02%</td>
                            <td class=\"font-bold\">+15.35%</td>
                        </tr>
                        <tr class=\"row-hypothetical\">
                            <td class=\"font-bold\">S&P 500 (SPY)</td>
                            <td>$39,878.16</td>
                            <td class=\"font-bold\">+$4,310.22</td>
                            <td class=\"font-bold\">+10.81%</td>
                            <td class=\"font-bold\">+11.83%</td>
                        </tr>
                        <tr class=\"row-hypothetical\">
                            <td class=\"font-bold\">Dow Jones (DIA)</td>
                            <td>$39,878.16</td>
                            <td class=\"font-bold\">+$1,944.30</td>
                            <td class=\"font-bold\">+4.88%</td>
                            <td class=\"font-bold\">+5.34%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        `;
    })();
</script>
<!-- Isolated Terminal Style Table Container End -->
<!-- Credits: https://share.google/aimode/HSQ0zdWOokfq8otas -->  
  <hr>
  <h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Jaime Montoya's investments from 12 April 2024 to 7 October 2026.</h2>
  <ul>
    <li><a href=\"beat-the-market/Capital.html\" target=\"_blank\" rel=\"noopener noreferrer\">Capital including chronological net worth resulting from investments and amounts in (a) Mutual funds (b) Bank accounts (c) Stock market. Data available from 5 May 2024 to 7 October 2026.</a>
    <li><a href=\"beat-the-market/MutualFundsPlusStocks.html\" target=\"_blank\" rel=\"noopener noreferrer\">Mutual funds plus stocks investments total profits from 12 April 2024 to 7 October 2026.</a>
    <li><a href=\"beat-the-market/NVDA.html\" target=\"_blank\" rel=\"noopener noreferrer\">Nvidia Corporation (NVDA) investments from 12 November 2024 to 7 October 2026.</a>
    <li><a href=\"beat-the-market/AMZN.html\" target=\"_blank\" rel=\"noopener noreferrer\">Amazon.com, Inc. (AMZN) investments from 18 November 2024 to 19 November 2024.</a>
    <li><a href=\"beat-the-market/PFE.html\" target=\"_blank\" rel=\"noopener noreferrer\">Pfizer Inc. (PFE) investments from 7 January 2025 to 1 July 2025.</a>
    <li><a href=\"beat-the-market/STOCKS.html\" target=\"_blank\" rel=\"noopener noreferrer\">Stock profits from 12 Nov 2024 to 7 October 2026.</a>
    <li><a href=\"beat-the-market/MutualFunds.html\" target=\"_blank\" rel=\"noopener noreferrer\">Mutual funds profits from 12 Apr 2024 to 7 October 2026.</a>
  </ul>
  <hr>
  <div id=\"jaime-montoya-capital\"></div>
  <hr>
  <h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Richest companies in the world by market capitalization, last updated 7 October 2026.</h2>
  <div id=\"richest-company\"></div>
  <hr>
  <h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Richest people, last updated 7 October 2026.</h2>
  <div id=\"richest-people\"></div>
  <hr>
  ";
  $index->Display();
?>