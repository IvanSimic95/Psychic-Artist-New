<?php 
http_response_code(403);
$pageTitle = "Error 403 - Access Forbidden!";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header.php'; ?>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <div class="row flex-center min-vh-100 py-6 text-center">
          <div class="col-sm-10 col-md-10 col-lg-8 col-xxl-8 min-vh-90">
            <div class="card py-6">
              <div class="card-body p-4 p-sm-5">
                <div class="fw-black lh-1 text-300 fs-error">403</div>
                <p class="lead mt-4 text-800 font-sans-serif fw-semi-bold w-md-75 w-xl-100 mx-auto">Access to this page is forbidden!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; ?>