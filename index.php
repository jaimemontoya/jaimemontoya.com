<?php
  require("home.php");
  $index = new HomePage();
  $index->content .= "<div id=\"richest-company\"></div>
  <div id=\"richest-people\"></div>
  <div id=\"jaime-montoya-capital\"></div>
  <br>
  <h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Jaime Montoya's investments from 12 April 2024 to 5 October 2026.</h2>
  <ul>
    <li><a href=\"beat-the-market/Capital.html\" target=\"_blank\" rel=\"noopener noreferrer\">Capital including chronological net worth resulting from investments and amounts in (a) Mutual funds (b) Bank accounts (c) Stock market. Data available from 5 May 2024 to 5 October 2026.</a>
    <li><a href=\"beat-the-market/MutualFundsPlusStocks.html\" target=\"_blank\" rel=\"noopener noreferrer\">Mutual funds plus stocks investments total profits from 12 April 2024 to 5 October 2026.</a>
    <li><a href=\"beat-the-market/NVDA.html\" target=\"_blank\" rel=\"noopener noreferrer\">Nvidia Corporation (NVDA) investments from 12 November 2024 to 5 October 2026.</a>
    <li><a href=\"beat-the-market/AMZN.html\" target=\"_blank\" rel=\"noopener noreferrer\">Amazon.com, Inc. (AMZN) investments from 18 November 2024 to 19 November 2024.</a>
    <li><a href=\"beat-the-market/PFE.html\" target=\"_blank\" rel=\"noopener noreferrer\">Pfizer Inc. (PFE) investments from 7 January 2025 to 1 July 2025.</a>
    <li><a href=\"beat-the-market/STOCKS.html\" target=\"_blank\" rel=\"noopener noreferrer\">Stock profits from 12 Nov 2024 to 5 October 2026.</a>
    <li><a href=\"beat-the-market/MutualFunds.html\" target=\"_blank\" rel=\"noopener noreferrer\">Mutual funds profits from 12 Apr 2024 to 5 October 2026.</a>
  </ul>
  <h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Jaime Montoya's stock investments from 12 November 2024 to 5 October 2026 versus hypothetical investments of the same amounts on NASDAQ-100 (QQQ), S&P 500 (SPY), and Dow Jones (DIA).</h2>
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
                            <td class=\"font-bold\">Jaime Montoya's stock portfolio</td>
                            <td class=\"font-bold\">$39,878.16</td>
                            <td class=\"font-bold\">+$10,966.83</td>
                            <td class=\"font-bold\">+27.50%</td>
                            <td class=\"font-bold\">+28.71%</td>
                            <td class=\"font-bold\">Active Portfolio Baseline</td>
                        </tr>
                        <tr>
                            <td class=\"indent-sub\">&bull; <strong>NVIDIA (NVDA) Total</strong></td>
                            <td class=\"font-italic\">$39,619.36</td>
                            <td class=\"font-italic\">+$10,971.77</td>
                            <td class=\"font-italic\">+27.69%</td>
                            <td class=\"font-italic\">+30.15%</td>
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
                            <td>$39,878.16</td>
                            <td class=\"font-bold\">+$5,562.30</td>
                            <td class=\"font-bold\">+13.95%</td>
                            <td class=\"font-bold\">+14.77%</td>
                            <td>+13.94% Annual Alpha over Tech Index</td>
                        </tr>
                        <tr class=\"row-hypothetical\">
                            <td class=\"font-bold\">S&P 500 (SPY)</td>
                            <td>$39,878.16</td>
                            <td class=\"font-bold\">+$4,103.11</td>
                            <td class=\"font-bold\">+10.29%</td>
                            <td class=\"font-bold\">+11.94%</td>
                            <td>+16.77% Annual Alpha over Broad Market</td>
                        </tr>
                        <tr class=\"row-hypothetical\">
                            <td class=\"font-bold\">Dow Jones (DIA)</td>
                            <td>$39,878.16</td>
                            <td class=\"font-bold\">+$1,885.24</td>
                            <td class=\"font-bold\">+4.73%</td>
                            <td class=\"font-bold\">+5.47%</td>
                            <td>+23.24% Annual Alpha over Industrials</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        `;
    })();
</script>
<!-- Isolated Terminal Style Table Container End -->





  <h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Jaime Montoya's stock portfolio performance vs NASDAQ-100 (QQQ), S&P 500 (SPY), and Dow Jones (DIA) from 12 November 2024 to 2 October 2026.</h2>
  <img src=\"beat-the-market/jaimeMontoyasPortfolioBeatingTheMarket.jpg\" 
     alt=\"Jaime Montoya's Portfolio beating the market\" 
     width=\"562\" 
     height=\"331\" 
     style=\"max-width: 100%; height: auto;\">
  <!-- Credits: https://share.google/aimode/PZED86KgEsBxeXJRk -->
<!-- Isolated Terminal Style Content Container Start -->
<div id=\"jaime-portfolio-analysis-root\"></div>
<script>
    (function() {
        const container = document.getElementById('jaime-portfolio-analysis-root');
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
                    font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif !important;
                    font-size: 14px !important;
                    line-height: 1.6 !important;
                }
                .content-wrapper {
                    background-color: #000000 !important;
                    color: #00ff00 !important;
                    padding: 20px;
                    border-radius: 4px;
                    border: 1px solid #333333;
                }
                h3 {
                    color: #00ff00 !important;
                    font-size: 16px !important;
                    font-weight: 600 !important;
                    margin-top: 0;
                    margin-bottom: 12px;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                    border-bottom: 1px solid #222222;
                    padding-bottom: 6px;
                }
                ul {
                    list-style-type: none !important;
                    padding-left: 0 !important;
                    margin-top: 0 !important;
                    margin-bottom: 20px !important;
                }
                li {
                    margin-bottom: 8px !important;
                    padding-left: 15px !important;
                    position: relative !important;
                }
                li::before {
                    content: \"•\" !important;
                    position: absolute !important;
                    left: 0 !important;
                    color: #00ff00 !important;
                }
                .highlight-text {
                    font-weight: bold !important;
                }
                .italic-text {
                    font-style: italic !important;
                    opacity: 0.9;
                }
            </style>
            
            <div class=\"content-wrapper\">
                <h3>Verification of Data and Visual Identity</h3>
                <ul>
                    <li><span class=\"highlight-text\">Official Chart Title:</span> Aligns precisely with specifications, reading \"Jaime Montoya's stock portfolio performance vs NASDAQ-100 (QQQ), S&P 500 (SPY), and Dow Jones (DIA) from 12 November 2024 to 5 October 2026.\"</li>
                    <li><span class=\"highlight-text\">X-Axis Label Layout:</span> The primary tracker is neatly split into a two-line horizontal array (\"Jaime Montoya's\" on top and \"stock portfolio\" stacked beneath), anchoring the labels at 0 degrees of rotation for maximum legibility.</li>
                    <li><span class=\"highlight-text\">Legend Color Mapping:</span> Blue bars correspond to Net Profit (USD) tracked along the left axis scale, while orange bars track Annualized Return (XIRR) along the right axis scale.</li>
                </ul>

                <h3>Performance Metric Analysis (Market Alpha)</h3>
                <ul>
                    <li><span class=\"highlight-text\">Your Real Portfolio:</span> Controls the far left of the chart layout with the maximum active visual threshold, recording an absolute net profit of <span class=\"highlight-text\">$10,966.83 USD</span> and a standalone annualized return (XIRR) of <span class=\"highlight-text\">28.71%</span>.</li>
                    <li><span class=\"highlight-text\">Vs. NASDAQ-100 (QQQ):</span> Active selection generated <span class=\"highlight-text\">$5,404.53 USD more in absolute cash gains</span> than the tech benchmark, capturing an annualized alpha premium of <span class=\"highlight-text\">+13.06%</span>.</li>
                    <li><span class=\"highlight-text\">Vs. S&P 500 (SPY):</span> Deployed assets more than doubled the dollar profits of the broader marketplace alternative ($4,302.77 USD baseline), outpacing its annualized metrics by a delta of <span class=\"highlight-text\">+16.59%</span>.</li>
                    <li><span class=\"highlight-text\">Vs. Dow Jones (DIA):</span> Highlights the widest active selection edge, scaling up total capital returns by nearly six times relative to the passive index ($1,885.24 USD baseline) and posting a dominant annualized growth gap of <span class=\"highlight-text\">+23.23%</span>.</li>
                </ul>
            </div>
        `;
    })();
</script>
<!-- Isolated Terminal Style Content Container End -->

<!-- Credits: Google AI: Analyze this image: https://jaimemontoya.com/beat-the-market/jaimeMontoyasPortfolioBeatingTheMarket.jpg -->
  ";
  $index->Display();
?>