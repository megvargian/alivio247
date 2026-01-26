<?php
include 'header.php';
?>
<div class="container">
    <div class="header">
        <h1>Choose Your Alivio247 Package</h1>
        <p>Professional call handling solutions designed to grow with your business</p>
    </div>

    <div class="packages">
        <!-- BASIC -->
        <div class="package essential">
            <div class="package-header">
                <div class="package-icon">✓</div>
                <h2>Basic</h2>
                <p class="package-tagline">24/7 Call Coverage & Visibility</p>
                <div class="pricing-container">
                    <div class="monthly-price">$199<span
                            style="font-size: 0.6em; font-weight: 600; color: #7f8c8d;">/month</span></div>
                    <div class="yearly-option">or $1,999/year<span style="color: #fff; font-weight: 700;">&nbsp;&nbsp;•&nbsp;&nbsp;2 Months Free</span></div>
                </div>
            </div>

            <p class="package-description">
                Built for businesses that need constant availability and full call visibility.
            </p>

            <ul class="features-list">
                <li><span class="feature-icon">✓</span><span>24/7 Availability</span></li>
                <li><span class="feature-icon">✓</span><span>Intelligent Call Handling</span></li>
                <li><span class="feature-icon">✓</span><span>Real-Time Dashboard Access</span></li>

                <li>
                    <span class="feature-icon">✓</span>
                    <div class="feature-block">
                        <div class="feature-title">Basic Customer Information Capture</div>
                        <ul class="feature-sublist">
                            <li class="feature-subitem"><span class="sub-bullet">•</span><span>Caller name</span></li>
                            <li class="feature-subitem"><span class="sub-bullet">•</span><span>Phone number</span></li>
                            <li class="feature-subitem"><span class="sub-bullet">•</span><span>Call reason</span></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <span class="feature-icon">✓</span>
                    <div class="feature-block">
                        <div class="feature-title">Call Records &amp; Insights</div>
                        <ul class="feature-sublist">
                            <li class="feature-subitem"><span class="sub-bullet">•</span><span>Call Transcripts</span>
                            </li>
                            <li class="feature-subitem"><span class="sub-bullet">•</span><span>Call Audio
                                    Recordings</span></li>
                            <li class="feature-subitem"><span class="sub-bullet">•</span><span>Call Summaries</span>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

            <div class="cta-row">
                <button class="package-cta">Contact Sales</button>
            </div>
        </div>

        <!-- PROFESSIONAL -->
        <div class="package professional">
            <span class="corner-badge">Most Popular</span>

            <div class="package-header">
                <div class="package-icon">⚡</div>
                <h2>Professional</h2>
                <p class="package-tagline">Advanced Engagement & Automation</p>
                <div class="pricing-container">
                    <div class="monthly-price">$349<span
                            style="font-size: 0.6em; font-weight: 600; color: #7f8c8d;">/month</span></div>
                    <div class="yearly-option">or $3,499/year<span style="color: #fff; font-weight: 700;">&nbsp;&nbsp;•&nbsp;&nbsp;2 Months Free</span></div>
                </div>
            </div>

            <p class="package-description">
                Everything in Basic, plus automation, analytics, and system connectivity.
            </p>

            <ul class="features-list">
                <li>
                    <span class="feature-icon">✓</span>
                    <span>Reservation/Appointment Tracking &nbsp; &nbsp; <strong>OR</strong> &nbsp; Order
                        Processing</span>
                </li>
                <li><span class="feature-icon">✓</span><span>SMS Confirmation Messages</span></li>
                <li><span class="feature-icon">✓</span><span>Advanced Customer Information Capture</span></li>
                <li><span class="feature-icon">✓</span><span>Customer Data Analytics</span></li>

                <li>
                    <span class="feature-icon">✓</span>
                    <div class="feature-block">
                        <div class="feature-title">System Integrations</div>
                        <ul class="feature-sublist">
                            <li class="feature-subitem">
                                <span class="sub-bullet">•</span>
                                <span>Integration with client systems </span>
                            </li>
                        </ul>
                    </div>
                </li>

                <li><span class="feature-icon">✓</span><span>Enhanced Reporting</span></li>
            </ul>

            <div class="cta-row">
                <button class="package-cta" onclick="contactSales()">Contact Sales</button>
            </div>
        </div>

        <!-- PREMIUM -->
        <div class="package premium">
            <div class="package-header">
                <div class="package-icon">★</div>
                <h2>Premium</h2>
                <p class="package-tagline">Full Operational Control</p>
                <div class="pricing-container">
                    <div class="monthly-price">$449<span
                            style="font-size: 0.6em; font-weight: 600; color: #7f8c8d;">/month</span></div>
                    <div class="yearly-option">or $4,499/year<span style="color: #fff; font-weight: 700;">&nbsp;&nbsp;•&nbsp;&nbsp;2 Months Free</span></div>
                </div>
            </div>

            <p class="package-description">
                Everything in Professional, plus deep analytics and priority expansion.
            </p>

            <ul class="features-list">
                <li><span class="feature-icon">✓</span><span>Reservation Management</span></li>
                <li><span class="feature-icon">✓</span><span>Order Processing</span></li>
                <li><span class="feature-icon">✓</span><span>Comprehensive Real-Time Dashboard</span></li>
                <li><span class="feature-icon">✓</span><span>Advanced Reporting &amp; Analytics</span></li>
                <li><span class="feature-icon">✓</span><span>Performance metrics, conversion tracking &amp; historical
                        trends</span></li>
                <li><span class="feature-icon">✓</span><span>Priority Integration &amp; Feature Expansion
                        (multi-location scaling)</span></li>
            </ul>

            <div class="cta-row">
                <button class="package-cta" onclick="contactSales()">Contact Sales</button>
            </div>
        </div>
    </div>

    <!-- Flexibility Option Section Added Here -->
    <div class="flexibility-option">
        <p>* Flexibility Option: All plans are available in a 6-month flexibility option, offering one free month while
            allowing businesses to benefit from discounted pricing without committing to a full annual term.</p>
    </div>
</div>

<script>
  function contactSales() {
      window.location.href = 'contact-us.php';
  }
</script>

<style>
  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
  }

  body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #ffffff;
      color: #333;
      line-height: 1.6;
      padding: 40px 0px;
  }

  .container {
      max-width: 1200px;
      margin: 0 auto;
  }

  .header {
      text-align: center;
      margin-bottom: 40px;
      padding-top: 4rem;
  }

  .header-logo {
      max-height: 180px;
      margin-bottom: 1px;
  }

  .header h1 {
      font-size: 2.5rem;
      font-weight: 700;
      color: #2c3e50;
      margin-bottom: 12px;
  }

  .header p {
      font-size: 1.1rem;
      color: #7f8c8d;
      max-width: 650px;
      margin: 0 auto;
  }
</style>

<?php
include 'footer.php';