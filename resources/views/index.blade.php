@extends('layout')

@section('title', 'Eben Web Studio')
@section('content') 

    <section class="sec-1-wrapper" style="background-image: url(images/bg.jpg)">
        <div class="sec-1-inner">
            <div>
                <h1>Eben Web Studio</h1>
                <br> 
                <p>I'm <span class="typer" id="main" data-words="Akindele Ebenezer, a Full Stack Developer, a Programmer, a UI/UX Designer, a Web Developer" data-delay="100" data-deleteDelay="1000"></span><span class="cursor" data-owner="main"></span></p>
                <br><br><br>
                <button >Hit me up!</button>
            </div>
        </div>
    </section>

    <section class="sec-2-wrapper" id="about">
        <div style="background-image: url('images/bg-2.jpg')">

        </div>
        <div>
            <h3>ABOUT ME</h3>
            <br>
            <img src="images/dp.jpg">
            <br>
            <h1>I'm Proficient in Web</h1>
            <p>I build well organised and responsive websites from scratch just like this one. My hobbies are Coding, Programming, Playing Musical Instruments and Designing. <br> I started coding when I joined the tech industry and the journey has been superb.</p>
            <br>
            <ul>
                <li><img src="images/check-mark.png">Design</li>
                <li><img src="images/check-mark.png">Development</li>
                <li><img src="images/check-mark.png">Web Apps</li>
                <li><img src="images/check-mark.png">Responsivenss</li>
            </ul>
            <br>
            <p><img src="images/get-in-touch.png"><a href="/#contact">Get in touch</a></p>
        </div>
    </section>

    <section class="sec-3-wrapper" id="services">
        <div class="sec-3-heading"> 
                <h3>WHAT I DO</h3>
                <br>
                <h1>I'm involved in Web activities and development everyday. Below is the list of services I render</h1> 
        </div>
        <div class="services">
            <div>
                <img src="images/web-dev.png">
                <h2>Web Development</h2>
                <p>I'm available to help you build and implement pleasant websites. Website creation is what I do on a daily basis, from helping you to design aesthetic properties such as layout and color, to technical considerations such as designing a website to handle a given amount of Internet traffic. My responsibilty is to design and develop websites and website applications for your business/company.</p>
                <span>LEARN MORE</span>
            </div> 
            <div>
                <img src="images/ui.png">
                <h2>User Interface</h2>
                <p>I have experience with responsive visual interface design. This means I can make your website layout look good on every devices. Before I build your website, I will provide some visual contents like the colors, animation, accessibilty which I'll use in your website. I'll show you the interaction design principles that I'll implement in the website.</p>
                <span>LEARN MORE</span>
            </div>
            <div>
                <img src="images/ux.png">
                <h2>User Experience</h2>
                <p>To effectively create a website that will pleasantly meet your needs, I will have to discuss some ideas of what I'm about to build, VERBALLY (on the phone) or by Visual Communication (physical). Through this process, you would know what your website is going to look like. Also, you would have the feel of how the website is going to be used by anyone who visits your site. This can also prompt me to get things done pretty quickly.</p>
                <span>LEARN MORE</span>
            </div>
        </div>
    </section>

    <section class="sec-4-wrapper" id="projects">
        <div class="sec-4-heading"> 
            <h3>RECENT WORKS</h3>
            <br>
            <h1>Checkout some of my recent projects and website I've built for clients</h1> 
        </div>
        <div class="projects">
            @foreach($projects as $project)
            <a href="{{ $project->website }}" target="_blank"> 
                <div class="projects-inner">
                    <div style="background-image: url({{ $project->image }})"></div>
                    <br>
                    <h2>{{ $project->name }}</h2> 
                    <p>VISIT WEBSITE</p>
                </div>
            </a>
            @endforeach
        </div>
    </section>

    <section class="sec-5-wrapper" id="contact">
        <form action="/mail" method="post"> 
            {!! csrf_field() !!}
            <div class="form-inner">
                <h2>Send me a message</h2>
                <div class="inputs">
                    <div>
                        <label for="name">Full Name *</label>
                        <br>
                        <input type="text" placeholder="Your name" name="name">
                    </div>
                    <div>
                        <label for="email">Email *</label>
                        <br>
                        <input type="email" placeholder="Your email" name="email">
                    </div>
                    <div>
                        <label for="phone">Phone *</label>
                        <br>
                        <input type="number" placeholder="Phone #" name="phone_no">
                    </div>
                    <div>
                        <label for="phone">Subject *</label>
                        <br>
                        <input type="string" placeholder="Subject" name="subject">
                    </div>
                    <div>
                        <label for="company">Company *</label>
                        <br>
                        <input type="text" placeholder="Company name (optional)" name="company">
                    </div>
                    <div class="message">
                        <label for="message">Message *</label>
                        <br>
                        <textarea placeholder="Write your message" name="message"></textarea>
                    </div>
                </div>
                <button name="submit_button">SEND MESSAGE</button>
            </div>
            <div class="form-inner">
                <div class="form-inner-div">
                    <h2>Contact Information</h2>
                    <br>
                    <p><strong>Ready to own a website?</strong> <br><br> Hit me up anytime. I'm open for <br> bookings whenever you're ready. If you <br> have any suggestion or just to have a chat, hit me up!</p>
                    <br>
                    <div class="contact-info"> 
                        <img src="images/email.png"> <span>info@ebenwebstudio.com</span> 
                    </div>
                    <div class="contact-info"> 
                        <img src="images/location.png"> <span>LAGOS, Nigeria</span> 
                    </div>
                    <div class="contact-info"> 
                        <img src="images/whatsapp.png"> <span>0905 275 7805</span> 
                    </div>
                    <div class="contact-info"> 
                        <img src="images/phone.png"> <span>0907 571 7368</span> 
                    </div>
                </div>
            </div>
        </form>
    </section>

    <script>
        
        const hitMeUpButton = document.querySelector('.sec-1-wrapper button');

        hitMeUpButton.addEventListener('click', () => {
            location.href = '/#contact';
        });

    </script>

@endsection