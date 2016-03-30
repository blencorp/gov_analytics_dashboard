<?php
/**
 * @file
 * Theme for Gov Analytics Dashboard.
 */
?>
<article id="web-analytics" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="row padding-2">
    <div id="main_data">
      <section id="realtime"
         data-block="realtime"
         data-source="<?php print $base_data_url; ?>/realtime.json"
         data-refresh="-1">
        <h2 id="current_visitors" class="data">...</h2>
        <div class="chart_subtitle">people on <?php print $agency_name; ?> websites now</div>
      </section>

      <section class="section_headline visits_today">
        <h3>Visits Today</h3>
        <h4>Eastern Time</h4>
      </section>
      <section id="time_series"
        data-block="today"
        data-source="<?php print $base_data_url; ?>/today.json"
        data-refresh="-1">
        <svg class="data time-series">
        </svg>
      </section>

      <section class="section_headline">
        <h3>Visits in the Past 90 Days</h3>
      </section>

      <section class="section_subheadline">
        There were <span id="total_visitors" class="data">...</span> visits over the past 90 days.
      </section>

      <section id="devices" class="three_column"
         data-block="devices"
         data-source="<?php print $base_data_url; ?>/devices.json">
        <h4>Devices</h4>
        <figure id="chart_device_types">
          <div class="data bar-chart">
          </div>
        </figure>
      </section>

      <section id="browsers" class="three_column">
        <h4>Browsers</h4>

        <figure id="chart_browsers"
          data-block="browsers"
          data-source="<?php print $base_data_url; ?>/browsers.json">
          <div class="data bar-chart">
          </div>
        </figure>

        <figure id="chart_ie"
          data-block="ie"
          data-source="<?php print $base_data_url; ?>/ie.json"
          data-scale-to-parent="true">
          <h4>Internet Explorer</h4>
          <div class="data bar-chart">
          </div>
        </figure>
      </section>

      <section id="operating_systems" class="three_column">
        <h4>Operating Systems</h4>

        <figure id="chart_os"
            data-block="os"
            data-source="<?php print $base_data_url; ?>/os.json">
          <div class="data bar-chart">
          </div>
        </figure>

        <figure id="chart_windows"
          data-block="windows"
          data-source="<?php print $base_data_url; ?>/windows.json"
          data-scale-to-parent="true">
          <h4>Windows</h4>
          <div class="data bar-chart">
          </div>
        </figure>
      </section>

      <!-- forces section to wrap, couldn't find a better way -->
      <div style="clear: both"></div>

      <section class="section_headline">
        <h3>Visitor Locations Right Now</h3>
      </section>

      <section id="cities" class="three_column"
         data-block="cities"
         data-source="<?php print $base_data_url; ?>/top-cities-realtime.json">
        <h4>Cities</h4>
        <figure id="chart_top-cities-90-days">
          <div class="data bar-chart">
          </div>
        </figure>
      </section>

      <section id="countries" class="three_column">
        <h4>Countries</h4>

        <figure id="chart_us"
          data-block="countries"
          data-source="<?php print $base_data_url; ?>/top-countries-realtime.json">
          <div class="data bar-chart">
          </div>
        </figure>

        <figure id="chart_countries"
          data-block="international_visits"
          data-source="<?php print $base_data_url; ?>/top-countries-realtime.json">
          <h4>International</h4>
          <div class="data bar-chart">
          </div>
        </figure>
      </section>

    </div>

    <div id="secondary_data">
      <section id="top_100_table">

        <!-- see: http://heydonworks.com/practical_aria_examples/ -->
        <h3>Top <span id="top_table_type">Pages</span></h3>
        <ul class="pills" role="tablist">
          <li><a role="tab" data-type="Pages" aria-selected="true" href="#top-pages-realtime" class="site-nav">Now</a></li>
          <li><a role="tab" data-type="Domains" href="#top-pages-7-days" class="site-nav">7 Days</a></li>
          <li><a role="tab" data-type="Domains" href="#top-pages-30-days" class="site-nav">30 Days</a></li>
        </ul>

        <figure class="top-pages" id="top-pages-realtime" role="tabpanel"
          data-block="top-pages-realtime"
          data-source="<?php print $base_data_url; ?>/top-pages-realtime.json"
          data-refresh="-1">
          <h5><em>
          People on a <strong>single, specific page</strong> now.  We only count pages with at least 10 people on the page.
          <a href="<?php print $base_data_url; ?>/all-pages-realtime.csv">Download the full dataset.</a>
        </em></h5>
          <div class="data bar-chart">
          </div>
        </figure>

        <figure class="top-pages" id="top-pages-7-days" role="tabpanel"
          data-block="top-pages"
          data-source="<?php print $base_data_url; ?>/top-domains-7-days.json">
          <h5><em>Visits over the last week to <strong>domains</strong>, including traffic to all pages within that domain.</em></h5>
          <div class="data bar-chart">
          </div>
        </figure>

        <figure class="top-pages" id="top-pages-30-days" role="tabpanel"
          data-block="top-pages"
          data-source="<?php print $base_data_url; ?>/top-domains-30-days.json">
            <h5><em>
          Visits over the last month to <strong>domains</strong>, including traffic to all pages within that domain. We only count pages with at least 1,000 visits in the last month.
          <a href="<?php print $base_data_url; ?>/all-domains-30-days.csv">Download the full dataset.</a>
        </em></h5>
          <div class="data bar-chart">
          </div>
        </figure>
      </section>

      <section id="top_downloads_table">

        <h3>Top Downloads</h3>
        <h5><em>Total file downloads over the last week on government domains.</em></h5>
        <figure id="top-downloads"
          data-block="top-downloads"
          data-source="<?php print $base_data_url; ?>/top-downloads-7-days.json">
          <div class="data bar-chart">
          </div>
        </figure>

      </section>
    </div>

    <section id="explanation">

      <h3>About this Site</h3>
      <p>
      This data provides a window into how people are interacting with the <?php print $agency_name; ?> online. The data comes from a <?php print $agency_name; ?> Google Analytics account.
      </p>

      <p>
        <strong>Top 20 data:</strong> "Now" data includes traffic to a specific, single page&mdash;whereas "7 Days" and "30 Days" data includes traffic to a domain <strong>and</strong> all pages within that domain.
      </p>

    </section>

    <section id="data_download">

      <h3>Download the Data</h3>

      <h4>Updated daily (CSV)</h4>
      <ul>
        <li>
          <a href="<?php print $base_data_url; ?>/all-domains-30-days.csv" class="download-data">Visits to all domains over 30 days</a>
        </li>
        <li>
          <a href="<?php print $base_data_url; ?>/top-downloads-7-days.csv" class="download-data">Top downloads over 7 days</a>
        </li>
        <li>
          <a href="<?php print $base_data_url; ?>/devices.csv" class="download-data">Desktop/mobile/tablet</a>
        </li>
        <li>
          <a href="<?php print $base_data_url; ?>/browsers.csv" class="download-data">Web browsers</a>
        </li>
        <li>
          <a href="<?php print $base_data_url; ?>/ie.csv" class="download-data">Versions of Internet Explorer</a>
        </li>
        <li>
          <a href="<?php print $base_data_url; ?>/os.csv" class="download-data">Operating systems</a>
        </li>
        <li>
          <a href="<?php print $base_data_url; ?>/windows.csv" class="download-data">Versions of Windows</a>
        </li>
      </ul>
      <h4>Updated every minute</h4>

      <ul>
        <li>
          <a href="<?php print $base_data_url; ?>/all-pages-realtime.csv" class="download-data">All pages people are visiting</a> (CSV)
        </li>
        <li>
          <a href="<?php print $base_data_url; ?>/top-countries-realtime.json" class="download-data">Visitors per country</a> (JSON)
        </li>
        <li>
          <a href="<?php print $base_data_url; ?>/top-cities-realtime.json" class="download-data">Visitors per city</a> (JSON)
        </li>
        <li>
          <a href="<?php print $base_data_url; ?>/realtime.json" class="download-data">Total people online</a> (JSON)
        </li>
      </ul>

    </section>
    </section>

    <!-- END CONTENT HERE -->

  </div><!-- /.container -->

  <!--
    IE detection, used to guide console formatting in subsequent include.
  -->
  <script type="text/javascript">window._ie9 = false;</script>

  <!--[if IE 9 ]>
    <script type="text/javascript">window._ie9 = true;</script>
  <![endif]-->

  <!--
   IE10 JS targeting: https://stackoverflow.com/a/17099988
   IE11 JS targeting: https://stackoverflow.com/a/17447695
  -->
  <script type="text/javascript">
    window._ie10 = ("onpropertychange" in document && !!window.matchMedia);
    window._ie11 = !!navigator.userAgent.match(/Trident\/7.0; rv 11/);
    window._ie = window._ie9 || window._ie10 || window._ie11;
  </script>

  <!-- report to oneself -->
  <script id="_fed_an_ua_tag" src="https://dap.digitalgov.gov/Universal-Federated-Analytics-Min.js?agency=GSA&exts=json"></script>
  </div>
</article>
