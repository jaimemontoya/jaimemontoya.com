<?php
  require("home.php");
  $index = new HomePage();
  $index->content .= "<hr>";
  $index->content .= "
  <div style=\"font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; color: #0f0 !important; line-height: 1.6; background-color: #000;\">
    
    <h2 style=\"color: #0f0 !important; border-bottom: 2px solid #0f0 !important; padding-bottom: 10px; margin-bottom: 20px;\">
        Market Comparison: NVIDIA (NVDA) vs. Major U.S. Indices
    </h2>
    
    <p style=\"font-size: 16px; margin-bottom: 25px; color: #0f0 !important;\">
        From <strong>June 18, 2024, to September 17, 2026</strong>, <strong>NVIDIA (NVDA)</strong> shares significantly outperformed all three major U.S. stock indices (S&P 500, Nasdaq, and Dow Jones). This massive surge has been primarily driven by the ongoing commercial expansion and market consolidation of Artificial Intelligence infrastructure.
    </p>

    <!-- Performance Table -->
    <h3 style=\"color: #0f0 !important; font-size: 18px; margin-top: 30px; margin-bottom: 12px;\">📊 Performance Breakdown (June 2024 – September 2026)</h3>
    <div style=\"overflow-x: auto; margin-bottom: 35px; border: 1px solid #0f0 !important; border-radius: 6px;\">
        <table style=\"width: 100%; border-collapse: collapse; min-width: 500px; text-align: left;\">
            <thead>
                <tr style=\"background-color: #111; border-bottom: 2px solid #0f0 !important;\">
                    <th style=\"padding: 12px; font-weight: 600; color: #0f0 !important;\">Asset / Index</th>
                    <th style=\"padding: 12px; font-weight: 600; color: #0f0 !important;\">Starting Value (June 18, 2024)</th>
                    <th style=\"padding: 12px; font-weight: 600; color: #0f0 !important;\">Current Value (Sept 17, 2026)</th>
                    <th style=\"padding: 12px; font-weight: 600; text-align: right; color: #0f0 !important;\">Cumulative Return (%)</th>
                </tr>
            </thead>
            <tbody>
                <tr style=\"border-bottom: 1px solid #0f0 !important; background-color: #000;\">
                    <td style=\"padding: 12px; font-weight: bold; color: #0f0 !important;\">NVIDIA (NVDA)</td>
                    <td style=\"padding: 12px; color: #0f0 !important;\">~$126.57 <span style=\"font-size: 11px; color: #0f0 !important; opacity: 0.7;\">(Split-Adj.)</span></td>
                    <td style=\"padding: 12px; font-weight: bold; color: #0f0 !important;\">$219.66</td>
                    <td style=\"padding: 12px; font-weight: bold; color: #0f0 !important; text-align: right;\">+73.55%</td>
                </tr>
                <tr style=\"border-bottom: 1px solid #0f0 !important; background-color: #111;\">
                    <td style=\"padding: 12px; font-weight: 600; color: #0f0 !important;\">Nasdaq Composite</td>
                    <td style=\"padding: 12px; color: #0f0 !important;\">~17,857.02</td>
                    <td style=\"padding: 12px; font-weight: bold; color: #0f0 !important;\">~26,100.00</td>
                    <td style=\"padding: 12px; font-weight: bold; color: #0f0 !important; text-align: right;\">+46.10%</td>
                </tr>
                <tr style=\"border-bottom: 1px solid #0f0 !important; background-color: #000;\">
                    <td style=\"padding: 12px; font-weight: 600; color: #0f0 !important;\">S&P 500 Index</td>
                    <td style=\"padding: 12px; color: #0f0 !important;\">~5,473.23</td>
                    <td style=\"padding: 12px; font-weight: bold; color: #0f0 !important;\">7,628.24</td>
                    <td style=\"padding: 12px; font-weight: bold; color: #0f0 !important; text-align: right;\">+39.59%</td>
                </tr>
                <tr style=\"border-bottom: 1px solid #0f0 !important; background-color: #111;\">
                    <td style=\"padding: 12px; font-weight: 600; color: #0f0 !important;\">Dow Jones Industrial Avg</td>
                    <td style=\"padding: 12px; color: #0f0 !important;\">~38,778.10</td>
                    <td style=\"padding: 12px; font-weight: bold; color: #0f0 !important;\">51,785.00</td>
                    <td style=\"padding: 12px; font-weight: bold; color: #0f0 !important; text-align: right;\">+32.27%</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Core Comparison Insights Block -->
    <h3 style=\"color: #0f0 !important; font-size: 19px; margin-top: 35px; margin-bottom: 15px; font-weight: 700; display: flex; align-items: center;\">
        <span style=\"margin-right: 8px;\">📈</span> Core Comparison Insights
    </h3>
    
    <div style=\"display: flex; flex-direction: column; gap: 15px;\">
        
        <!-- Insight 1 -->
        <div style=\"background-color: #000; border: 1px solid #0f0 !important; border-left: 4px solid #0f0 !important; padding: 15px; border-radius: 0 6px 6px 0;\">
            <h4 style=\"margin: 0 0 5px 0; color: #0f0 !important; font-size: 15px; font-weight: 700;\">NVIDIA’s Outsized Dominance</h4>
            <p style=\"margin: 0; font-size: 14.5px; color: #0f0 !important;\">
                Despite weathering noticeable periods of volatility and broader macro-tech corrections throughout early 2025, NVIDIA concluded the period up by over <strong>73%</strong>, easily tripling the gains of more conservative asset classes.
            </p>
        </div>

        <!-- Insight 2 -->
        <div style=\"background-color: #000; border: 1px solid #0f0 !important; border-left: 4px solid #0f0 !important; padding: 15px; border-radius: 0 6px 6px 0;\">
            <h4 style=\"margin: 0 0 5px 0; color: #0f0 !important; font-size: 15px; font-weight: 700;\">The Tech-Heavy Nasdaq Surge</h4>
            <p style=\"margin: 0; font-size: 14.5px; color: #0f0 !important;\">
                Because the Nasdaq Composite heavily weights large-cap semiconductor and cloud-computing infrastructure stocks, it rode NVIDIA's coattails to become the top-performing major index over this two-year period, climbing <strong>46.10%</strong>.
            </p>
        </div>

        <!-- Insight 3 -->
        <div style=\"background-color: #000; border: 1px solid #0f0 !important; border-left: 4px solid #0f0 !important; padding: 15px; border-radius: 0 6px 6px 0;\">
            <h4 style=\"margin: 0 0 5px 0; color: #0f0 !important; font-size: 15px; font-weight: 700;\">S&P 500 vs. Dow Divergence</h4>
            <p style=\"margin: 0; font-size: 14.5px; color: #0f0 !important;\">
                The S&P 500 Index managed a stellar <strong>39.59%</strong> gain, carried extensively by its heavy allocation to tech megacaps. Conversely, the Dow Jones Industrial Average—which tracks traditional blue-chip, industrial, and non-tech sectors—underperformed the pack at <strong>32.27%</strong>, proving that equity growth remains highly centralized within technological ecosystems.
            </p>
        </div>

    </div>

</div>
  ";
  $index->content .= "<h2>Vision</h2>
  <p>Proverbs 6:6-8 EXB: \"Go watch the ants, you lazy person. Watch what they do [its paths] and be [or become] wise. Ants have no commander, no leader or ruler, but they store up [get their] food in the summer and gather their supplies [provisions] at harvest.\"</p>
  <h2>Mission</h2>
  <p>Follow a disciplined long term blue chip stock investing approach passionately advocating for 1) Financial greatness 2) Freedom from financial debt.</p>
  <h2>Jaime Montoya's net worth</h2>
  <ul>
    <li>Current: <span class=\"cod\">57,772.4 USD</span> as of 4 September 2026.
	<li>All-time high: <span class=\"cod\">58,091.81 USD</span> on 4 September 2026.
  </ul>
  <!--<h2>Table of contents</h2>
  <ol>
    <li><a href=\"about/\">About</a>: Jaime Montoya's one-page resume.
	<li><a href=\"coursera/\">Coursera</a>: Coursera courses I have successfully completed.
  </ol>
  <hr>-->
  
  <p>My investment philosophy is inspired by the Matthew effect, sometimes called the Matthew principle or cumulative advantage. For that reason, whenever I buy stocks I only choose the world's most valuable company by market capitalization. I follow a disciplined long term blue chip stock investing approach. I passionately advocate for 1) Financial greatness 2) Freedom from financial debt. This is the Matthew 25:29 Bible verse in the King James Verse:</p>
  <div class=\"center\"><img src=\"img/kingJamesBibleMatthewCh25V29.jpg\" alt=\"Matthew 25:29 in the King James Version\" width=\"318\" height=\"70\"></div>
  <!--<p>Following my investment philosophy, if I were to buy stocks today 24 July 2026, Nvidia Corporation (NVDA) is the company where I would invest it all:</p>
  <div class=\"center\"><img src=\"img/NVIDIA_logo.jpg\" alt=\"Nvidia Corporation logo\" width=\"206\" height=\"140\"></div>
  <h2>Featured financial charts</h2>-->
  <div id=\"jaime-montoya-capital\"></div>
  <h2>Jaime Montoya's investments</h2>
  <iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSnedM83IJlnIUy0Ttj4DrDrGWCrqhjC_HXUwxa8cv3nmhraprEToUSuy776FLfXewO49AdS_9SQdUH/pubhtml?widget=true&amp;headers=false\" id=\"investment-spreadsheet\"></iframe>
  <div id=\"richest-company\"></div>
  <div id=\"richest-people\"></div>
  ";
  $index->Display();
?>

