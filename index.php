<?php
  require("home.php");
  $index = new HomePage();
  $index->content .= "<div id=\"richest-company\"></div>
  <div id=\"richest-people\"></div>
  <div id=\"jaime-montoya-capital\"></div>
  <h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Jaime Montoya's investments from 12 April 2024 to 25 September 2026</h2>
  <ul>
    <li><a href=\"beat-the-market/Capital.html\" target=\"_blank\" rel=\"noopener noreferrer\">Capital including chronological net worth resulting from investments and amounts in (a) Mutual funds (b) Bank accounts (c) Stock market. Data available from 5 May 2024.</a>
    <li><a href=\"beat-the-market/MutualFundsPlusStocks.html\" target=\"_blank\" rel=\"noopener noreferrer\">Mutual funds plus stocks investments total profits from 12 April 2024 to 25 September 2026.</a>
    <li><a href=\"beat-the-market/NVDA.html\" target=\"_blank\" rel=\"noopener noreferrer\">Nvidia Corporation (NVDA) investments from 12 November 2024 to 25 September 2026.</a>
    <li><a href=\"beat-the-market/AMZN.html\" target=\"_blank\" rel=\"noopener noreferrer\">Amazon.com, Inc. (AMZN) investments from 18 November 2024 to 19 November 2024.</a>
    <li><a href=\"beat-the-market/PFE.html\" target=\"_blank\" rel=\"noopener noreferrer\">Pfizer Inc. (PFE) investments from 7 January 2025 to 1 July 2025.</a>
    <li><a href=\"beat-the-market/STOCKS.html\" target=\"_blank\" rel=\"noopener noreferrer\">Stock profits from 12 Nov 2024 to 25 September 2026.</a>
    <li><a href=\"beat-the-market/MutualFunds.html\" target=\"_blank\" rel=\"noopener noreferrer\">Mutual funds profits from 12 Apr 2024 to 25 September 2026.</a>
  </ul>
  <h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Jaime Montoya's stock investments from 12 November 2024 to 25 September 2026 versus hypothetical investments of the same amounts on NASDAQ-100 (QQQ), S&P 500 (SPY), and Dow Jones (DIA).</h2>
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
                .desc-text { opacity: 0.8; font-style: italic !important; }
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
                            <th>Performance Role / Alpha Margin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=\"font-bold\">Jaime Montoya's Portfolio</td>
                            <td class=\"font-bold\">$39,733.16</td>
                            <td class=\"font-bold\">+$7,467.67</td>
                            <td class=\"font-bold\">+18.79%</td>
                            <td class=\"font-bold\">+21.93%</td>
                            <td class=\"font-bold\">Active Portfolio Baseline</td>
                        </tr>
                        <tr>
                            <td class=\"indent-sub\">&bull; <strong>NVIDIA (NVDA) Total</strong></td>
                            <td class=\"font-italic\">$39,619.36</td>
                            <td class=\"font-italic\">+$7,472.61</td>
                            <td class=\"font-italic\">+18.86%</td>
                            <td class=\"font-italic\">+21.93%</td>
                            <td class=\"desc-text\">Ultimate portfolio growth engine</td>
                        </tr>
                        <tr>
                            <td class=\"indent-sub\">&bull; <strong>Amazon (AMZN) Total</strong></td>
                            <td class=\"font-italic\">$203.80</td>
                            <td class=\"font-italic\">-$0.08</td>
                            <td class=\"font-italic\">-0.04%</td>
                            <td class=\"font-italic\">-13.35%</td>
                            <td class=\"desc-text\">Short-term breakeven trade</td>
                        </tr>
                        <tr>
                            <td class=\"indent-sub\">&bull; <strong>Pfizer (PFE) Total</strong></td>
                            <td class=\"font-italic\">$55.00</td>
                            <td class=\"font-italic\">-$4.86</td>
                            <td class=\"font-italic\">-8.84%</td>
                            <td class=\"font-italic\">-17.55%</td>
                            <td class=\"desc-text\">Mid-term defensive drag</td>
                        </tr>
                        <tr class=\"row-hypothetical\">
                            <td class=\"font-bold\">NASDAQ-100 (QQQ)</td>
                            <td>$39,733.16</td>
                            <td class=\"font-bold\">+$5,059.69</td>
                            <td class=\"font-bold\">+12.73%</td>
                            <td class=\"font-bold\">+14.82%</td>
                            <td>+7.11% Annual Alpha over Tech Index</td>
                        </tr>
                        <tr class=\"row-hypothetical\">
                            <td class=\"font-bold\">S&P 500 (SPY)</td>
                            <td>$39,733.16</td>
                            <td class=\"font-bold\">+$4,098.77</td>
                            <td class=\"font-bold\">+10.32%</td>
                            <td class=\"font-bold\">+11.98%</td>
                            <td>+9.95% Annual Alpha over Broad Market</td>
                        </tr>
                        <tr class=\"row-hypothetical\">
                            <td class=\"font-bold\">Dow Jones (DIA)</td>
                            <td>$39,733.16</td>
                            <td class=\"font-bold\">+$1,884.04</td>
                            <td class=\"font-bold\">+4.74%</td>
                            <td class=\"font-bold\">+5.49%</td>
                            <td>+16.44% Annual Alpha over Industrials</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        `;
    })();
</script>
<!-- Isolated Terminal Style Table Container End -->
  <h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Jaime Montoya's stock portfolio performance vs NASDAQ-100 (QQQ), S&P 500 (SPY), and Dow Jones (DIA) from 12 November 2024 to 25 September 2026.</h2>
  <img src=\"beat-the-market/jaimeMontoyasPortfolioBeatingTheMarket.jpg\" 
     alt=\"Jaime Montoya's Portfolio beating the market\" 
     width=\"563\" 
     height=\"332\" 
     style=\"max-width: 100%; height: auto;\">
  <!-- Credits: https://share.google/aimode/y4UdRax6tK0nDjMxC -->
  ";
  $index->Display();
?>