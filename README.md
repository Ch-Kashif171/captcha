# K-Captcha

K-Captcha is a simple easy to use Laravel package.

# Getting Started
  installing Captcha Composer Package
Note: If you do not have Composer yet, you can install it by following the instructions on https://getcomposer.org

# Step 1. Install package
  
    composer require kashif/kcaptcha

# Step 2. Register the Captcha service provider
  in config/app.php
  add following line
   ```php
    Kashif\Kcaptcha\CaptchaServiceProvider::class,
   ```
# Using Captcha:
  In Controller include and call captcha facade and send variable to view and print this variable in view as below
  ```php
    use Kashif\Kcaptcha\Captcha;
    $captcha = Captcha::render();
    return view('view',compact('captcha'));
    
    <?php echo $captcha; ?>

  ```
  Also a directive is available to render captcha in balde view, for this we just need to add below directive into the blade.
  ```php
    @kcaptcha
  ```
  # Verify Captcha:
  
  to verify captcha text you need to call verify faceade in controller and pass the text entered by user and it will return ture or false.
  
   ```php
     Captcha::verify("captcha text");
     
   ```
