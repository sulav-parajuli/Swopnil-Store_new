@extends('partials.master')

@section('content')

    <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>QR Codes</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li>QR Codes</li>
            </ol>
          </div>
  
        </div>
      </div><!-- End Breadcrumbs -->

      <section class="sample-page">
        <div class="container" data-aos="fade-up">
          <p>
            Making payments is now easier for our customers. You can now use the
            QR code payment method for a seamless transaction experience.<br />
            By using the QR code payment method, customers can receive
            substantial discounts on every purchase and enjoy an enhanced
            shopping experience.<br />
            Enjoy your shopping and conveniently pay using the QR codes provided
            below:
          </p>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">S.N</th>
                <th scope="col">Name</th>
                <th scope="col">View</th>
                <th scope="col">Download</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Esewa</td>
                <td>
                  <a href="/img/qr/QR.jpg" class="glightbox">View</a>
                </td>
                <td><a href="/img/qr/QR.jpg" download>download</a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Ime Pay</td>
                <td>
                  <a href="/img/qr/imeqr.jpg" class="glightbox">View</a>
                </td>
                <td><a href="/img/qr/imeqr.jpg" download>download</a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Khalti</td>
                <td>
                  <a href="/img/qr/khaltiqr.png" class="glightbox"
                    >View</a
                  >
                </td>
                <td>
                  <a href="/img/qr/khaltiqr.png" download>download</a>
                </td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Prabhu Pay</td>
                <td>
                  <a href="/img/qr/pravuqr.jpg" class="glightbox">View</a>
                </td>
                <td>
                  <a href="/img/qr/pravuqr.jpg" download>download</a>
                </td>
              </tr>
            </tbody>
          </table>
          <p>Thank you! Visit Again.</p>
        </div>
      </section>
    </main>
    <!-- End #main -->

    @endsection