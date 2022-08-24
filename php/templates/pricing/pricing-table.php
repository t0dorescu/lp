<section id="pricing" class="pricing">
    <div class="container">
        <header class="section-header">
            <h2>PLANS</h2>
            <p class="font-family-2">Pricing</p>
        </header>
        <div class="row gy-4">
            <!-- <div class="col-lg-3 col-md-6">
                <div class="box">
                    <h3 style="color: #07d5c0;">Free plan</h3>
                    <div class="price"><sup>$</sup>0<span> / mo</span></div>
                    <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                    <ul>
                    <li>✓ JavaScript course (1 hour content)</li>
                    <li>✓ Free 14 day trial (no strings attached)</li>
                    <li class="na">❌Chess game engine</li>
                    <li class="na">❌Flappy bird in canvas</li>
                    <li class="na">❌Path finding algorithm</li>
                    <li class="na">❌CSS hacking challenges</li>
                    <li class="na">❌Ultimate Vue 2/3 crash course</li>
                    <li class="na">❌3 Unique web dev projects</li>
                    <li class="na">❌Matrix symbols rain effect</li>
                    <li class="na">❌HTML canvas manipulation</li>
                    </ul>
                    <a 
                        class="btn-buy"
                        onclick="startCheckout('free')"
                    >Try it now</a>
                </div>
            </div> -->
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <h3 style="color: #65c600;">Junior plan</h3>
                    <div class="price"><sup>$</sup>479<span> / mo</span></div>
                    <img src="assets/img/pricing-junior.png" class="img-fluid" alt="">
                    <ul>
                    <li>✓ JavaScript Course (FULL +4 hours)</li>
                    <li>✓ CSS hacking challenges</li>
                    <li>✓ Ultimate Vue 2/3 crash course</li>
                    <li>✓ 3 Unique web dev projects</li>
                    <li class="na">❌ Chess game engine</li>
                    <li class="na">❌ Flappy bird in canvas</li>
                    <li class="na">❌ Path finding algorithm</li>
                    <li class="na">❌ Matrix symbols rain effect</li>
                    <li class="na">❌ HTML canvas manipulation</li>
                    </ul>
                    <!-- onclick="startCheckout('junior')" -->
                    <a 
                        class="btn-buy disabled"
                    >Not available</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box black">
                    <span class="featured">POPULAR</span>
                    <h3 style="color: #ff901c;">Mid-level plan</h3>
                    <div class="price"><sup>$</sup>949<span> / mo</span></div>
                    <img src="assets/img/pricing-midlevel.png" class="img-fluid" alt="">
                    <ul>
                    <li>✔️ Chess game engine</li>
                    <li>✔️ Flappy bird in canvas</li>
                    <li>✔️ Path finding algorithm</li>
                    <li>✔️ Matrix symbols rain effect</li>
                    <li>✔️ JavaScript for absolute beginners</li>
                    <li>✔️ HTML canvas manipulation</li>
                    <li>✔️ CSS hacking challenges</li>
                    <li>✔️ Ultimate Vue 2/3 crash course</li>
                    <li>✔️ 3 Unique web dev projects</li>
                    </ul>
                    <!-- onclick="startCheckout('midlevel')" -->
                    <a 
                    class="btn-buy disabled"
                    >Not available</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <h3 style="color: #ff0071;">Senior-level plan</h3>
                    <div class="price"><sup>$</sup>2699<span> / mo</span></div>
                    <img src="assets/img/pricing-senior.png" class="img-fluid" alt="">
                    <ul>
                    <li><strong>💯 ALL PLANS INCLUDED</strong></li>
                    <li>🔥 EXCLUSIVE access to group coaching calls with Tudor</li>
                    <li>🤝 Feedback on passing interviews</li>
                    <li>💰 Adjusting your positioning to attract top companies</li>
                    <li>🎯 Access to our network of 5000+ top recruiters</li>
                    <li>✓ Access to private discord group</li>
                    </ul>
                    <!-- onclick="startCheckout('senior')" -->
                    <a 
                        class="btn-buy btn-third disabled"
                    >Not available</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function startCheckout(plan) {
        localStorage.setItem('plan', plan)
        openRegisterModal()
    }
</script>