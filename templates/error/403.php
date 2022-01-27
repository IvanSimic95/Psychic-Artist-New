<?php 
http_response_code(403);
$pageTitle = "Error 403 - Access to this page is forbidden!";
include $_SERVER['DOCUMENT_ROOT'].'/templates/header.php'; ?>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <div class="row flex-center min-vh-80 py-6 text-center">
          <div class="col-sm-12 col-md-12 col-lg-10 col-xxl-8 min-vh-90">
            <div class="card py-6">
            <div class="card-body p-4 p-sm-5">
                <div class="fw-black lh-1 text-300 fs-error">403</div>
                <p class="lead mt-4 text-800 font-sans-serif fw-semi-bold w-md-75 w-xl-100 mx-auto">Access to this page is forbidden!</p>
                <hr>
                <i><?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?></i>
                <hr>
                <a class="btn btn-primary btn-lg mt-3" href="/"><span class="fas fa-home me-2"></span> Take me home</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; ?>