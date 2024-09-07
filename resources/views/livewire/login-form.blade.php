<form method="POST" class="login-form">
    @csrf
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div style="margin-top: -600px" class="container d-flex justify-content-center align-items-center min-vh-100">
                <div class="login-card p-5 shadow-lg">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="rocket-image text-center mb-4">
                        <img src="{{ asset('images/tc-shot.png') }}" alt="TC" class="img-fluid">
                        <p class="mt-4 text-white">You Are Few Minutes Way To Boost Your Skills With Ludiflex</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="text-end mb-3">
                        <button class="btn btn-outline-light me-2">Sign In</button>
                        <button class="btn btn-light">Sign Up</button>
                      </div>
                      <h3 class="text-white mb-4">Sign In</h3>
                      <form>
                        <div class="mb-3">
                          <label for="username" class="form-label text-white">Username</label>
                          <input type="text" class="form-control" id="username" placeholder="Enter your username">
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label text-white">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <div class="mb-3 text-end">
                          <a href="#" class="text-light">Forgot Password?</a>
                        </div>
                        <div class="d-grid">
                          <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                        <div class="social-buttons mt-4 text-center">
                          <button type="button" class="btn btn-outline-light me-2"><i class="bi bi-google"></i></button>
                          <button type="button" class="btn btn-outline-light me-2"><i class="bi bi-facebook"></i></button>
                          <button type="button" class="btn btn-outline-light me-2"><i class="bi bi-twitter"></i></button>
                          <button type="button" class="btn btn-outline-light"><i class="bi bi-github"></i></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-2"></div>
    </div>
</form>
