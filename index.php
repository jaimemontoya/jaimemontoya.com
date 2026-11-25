<?php
/*
commit 3be3f138788afeebf9c19014865404944ac503c0 (HEAD -> main)
Merge: 19ffd65f a7e7872a
Author: Jaime Montoya <jmontoya@jaimemontoya.com>
Date:   Wed Nov 25 22:18:19 2026 +0000

    Merge branch 'main' of https://github.com/jaimemontoya/jaimemontoya
*/
  require("home.php");
  $index = new HomePage();
  $index->content .= "
<hr>
<h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Mission</h2>
<p>To beat the market with individual stocks over index ETFs, documented through a live portfolio experiment tracking real-money investments against QQQ, SPY, and DIA.</p>
<h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Vision</h2>
<p>To prove that disciplined individual stock picking can outperform passive indexing over a lifetime.</p>

<h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Goals</h2>
<ul style=\"margin: 0.5rem 0 1.5rem 0; padding-left: 1.25rem; line-height: 1.6;\">
  <li style=\"margin-bottom: 0.4rem;\">Achieve long-term wealth growth by building a high-conviction stock portfolio that outperforms passive index funds.</li>
  <li>Maintain 100% transparency by tracking real-money performance in public—through both gains and drawdowns.</li>
</ul>
<h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Objectives</h2>
<ul style=\"margin: 0.5rem 0 1.5rem 0; padding-left: 1.25rem; line-height: 1.6;\">
  <li style=\"margin-bottom: 0.4rem;\">Outperform the annualized return (XIRR) and total ROI of QQQ, SPY, and DIA over multi-year horizons.</li>
  <li style=\"margin-bottom: 0.4rem;\">Avoid reckless losses and evaluate exits against the market rather than selling prematurely.</li>
  <li>Keep portfolio performance and net worth data updated after U.S. market close.</li>
</ul>
<p><span class=\"cod\">Data accurate as of 25 November 2026 at 4:00 PM EST (US Market Close).</span></p>


<!-- Isolated Terminal Style Table Container Start --> 
<div id=\"jaime-portfolio-terminal-table-root\"></div> 
<script> 
(function() { 
    const container = document.getElementById(\"jaime-portfolio-terminal-table-root\"); 
    if (!container) return; 

    // Create an isolated Shadow DOM boundary to block website CSS
    const shadow = container.attachShadow({ mode: \"closed\" }); 
    
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
    .font-bold { 
        font-weight: bold !important; 
    } 
    .font-italic { 
        font-style: italic !important; 
    } 
    .indent-sub { 
        padding-left: 24px !important; 
    } 
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
                    <td class=\"font-bold\">$46,323.37</td> 
                    <td class=\"font-bold\">-$8,471.09</td> 
                    <td class=\"font-bold\">-18.29%</td> 
                    <td class=\"font-bold\">-27.50%</td> 
                </tr> 
                <tr> 
                    <td class=\"indent-sub\">&bull; <strong>Apple (AAPL) Total</strong></td> 
                    <td class=\"font-italic\">$6,445.21</td> 
                    <td class=\"font-italic\">-$37.09</td> 
                    <td class=\"font-italic\">-0.58%</td> 
                    <td class=\"font-italic\">-14.96%</td> 
                </tr> 
                <tr> 
                    <td class=\"indent-sub\">&bull; <strong>NVIDIA (NVDA) Total</strong></td> 
                    <td class=\"font-italic\">$39,619.36</td> 
                    <td class=\"font-italic\">-$8,429.06</td> 
                    <td class=\"font-italic\">-21.28%</td> 
                    <td class=\"font-italic\">-27.62%</td> 
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
                    <td>$46,323.37</td> 
                    <td class=\"font-bold\">-$110.39</td> 
                    <td class=\"font-bold\">-0.24%</td> 
                    <td class=\"font-bold\">-0.34%</td> 
                </tr> 
                <tr class=\"row-hypothetical\"> 
                    <td class=\"font-bold\">S&P 500 (SPY)</td> 
                    <td>$46,323.37</td> 
                    <td class=\"font-bold\">+$1,269.31</td> 
                    <td class=\"font-bold\">+2.74%</td> 
                    <td class=\"font-bold\">+3.94%</td> 
                </tr> 
                <tr class=\"row-hypothetical\"> 
                    <td class=\"font-bold\">Dow Jones (DIA)</td> 
                    <td>$46,323.37</td> 
                    <td class=\"font-bold\">+$1,271.99</td> 
                    <td class=\"font-bold\">+2.75%</td> 
                    <td class=\"font-bold\">+3.95%</td> 
                </tr> 
            </tbody> 
        </table> 
    </div>`; 
})(); 
</script> 
<!-- Isolated Terminal Style Table Container End -->




<!-- Credits: https://share.google/aimode/yQsVJmze8gidycuiR -->  
  <hr>
  <h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Jaime Montoya's investments from 12 April 2024 to 25 November 2026.</h2>
  <ul>
    <li><a href=\"beat-the-market/Capital.html\" target=\"_blank\" rel=\"noopener noreferrer\">Capital including chronological net worth resulting from investments and amounts in (a) Mutual funds (b) Bank accounts (c) Stock market. Data available from 5 May 2024 to 25 November 2026.</a>
	<li><a href=\"beat-the-market/STOCKS.html\" target=\"_blank\" rel=\"noopener noreferrer\">Stock profits from 12 Nov 2024 to 25 November 2026.</a>
    <li><a href=\"beat-the-market/AAPL.html\" target=\"_blank\" rel=\"noopener noreferrer\">Apple Inc. (AAPL) investments from 12 November 2026 to 25 November 2026.</a>
    <li><a href=\"beat-the-market/NVDA.html\" target=\"_blank\" rel=\"noopener noreferrer\">Nvidia Corporation (NVDA) investments from 12 November 2024 to 25 November 2026.</a>
    <li><a href=\"beat-the-market/AMZN.html\" target=\"_blank\" rel=\"noopener noreferrer\">Amazon.com, Inc. (AMZN) investments from 18 November 2024 to 19 November 2024.</a>
    <li><a href=\"beat-the-market/PFE.html\" target=\"_blank\" rel=\"noopener noreferrer\">Pfizer Inc. (PFE) investments from 7 January 2025 to 1 July 2025.</a>
	<li><a href=\"beat-the-market/MutualFundsPlusStocks.html\" target=\"_blank\" rel=\"noopener noreferrer\">Mutual funds plus stocks investments total profits from 12 April 2024 to 25 November 2026.</a>
	<li><a href=\"beat-the-market/MutualFunds.html\" target=\"_blank\" rel=\"noopener noreferrer\">Mutual funds profits from 12 Apr 2024 to 25 November 2026.</a>
  </ul>
  <hr>
  <div id=\"jaime-montoya-capital\"></div>
  <hr>
  <h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Richest companies in the world by market capitalization, last updated 25 November 2026.</h2>
  <div id=\"richest-company\"></div>
  <hr>
  <h2 style=\"cursor: default; user-select: none; -webkit-font-smoothing: antialiased; font-family: Arial; font-size: 16px; font-weight: bold;\">Richest people, last updated 25 November 2026.</h2>
  <div id=\"richest-people\"></div>
  <hr>
  ";
  $index->Display();
?>