<footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a class="navbar-brand" href="{{url('/')}}"> <span class="text-primary">Emma</span> <span style="color:black">- Side</span></a>
                        <!-- <a href="#"><img width="210" src="images/logo.png" alt="#" /></a> -->
                      </div>
                      <div class="information_f">
                        <p><strong>ADDRESS:</strong> 207 Ogurugu Road, Street Name Enugu, Nigeria</p>
                        <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                        <p><strong>EMAIL:</strong> yourmain@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="{{url('/')}}">Home</a></li>
                           <li><a href="">About</a></li>
                           <li><a href="">Testimonial</a></li>
                           <li><a href="">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Account</h3>
                        <ul>
                           <li><a href="{{ route('profile.show') }}">Profile</a></li>
                           <li><a href="{{ route('login') }}">Login</a></li>
                           <li><a href="{{ route('register') }}">Register</a></li>
                           <li><a href="{{url('show_cart')}}">Cart</a></li>
                           <li><a href="">Widget</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Newsletter</h3>
                        <div class="information_f">
                          <p>Subscribe by our newsletter and get update.</p>
                        </div>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Enter Your Mail" name="email" />
                                    <input type="submit" value="Subscribe" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="{{url('/')}}">Kelly Pharmacy </a><br>
         
            Built By <a href="https://beacons.ai/flamesintech" target="_blank">FlamesInTech</a>
         
         </p>
      </div>