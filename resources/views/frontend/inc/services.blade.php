 <!-- Service Start -->
 <div class="service">
     <div class="container">
         <div class="section-header text-center mb-5">
             <h2>Our Practice Areas</h2>
         </div>
         <div class="row">
             {{-- Current UI commented out --}}


             {{-- New Modern UI for Practice Areas --}}
             {{-- loop --}}
             @foreach ($practiceareas as $area)
             <div class="col-lg-4 col-md-6 mb-4">
                 <div class="practice-card">
                     <div class="practice-card-image">
                         <img src="{{asset('storage/'.$area->image)}}" alt="Civil Law">
                     </div>
                     <div class="practice-card-content">
                         <h3>{{ $area->title}}</h3>
                         <p>
                            {{$area->description}}
                         </p>
                         <a class="cta-button-light" href="">Learn More</a>
                     </div>
                 </div>
             </div>
             @endforeach
              {{-- add cta to more practice areas button --}}
              

             
             {{-- end loop --}}
             {{-- 
              <div class="col-lg-4 col-md-6 mb-4">
                 <div class="practice-card">
                     <div class="practice-card-image">
                         <img src="https://picsum.photos/id/20/400/250" alt="Family Law">
                     </div>
                     <div class="practice-card-content">
                         <h3>Family Law</h3>
                         <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit
                             non</p>
                         <a class="cta-button-light" href="">Learn More</a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 mb-4">
                 <div class="practice-card">
                     <div class="practice-card-image">
                         <img src="https://picsum.photos/id/30/400/250" alt="Business Law">
                     </div>
                     <div class="practice-card-content">
                         <h3>Business Law</h3>
                         <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit
                             non</p>
                         <a class="cta-button-light" href="">Learn More</a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 mb-4">
                 <div class="practice-card">
                     <div class="practice-card-image">
                         <img src="https://picsum.photos/id/40/400/250" alt="Education Law">
                     </div>
                     <div class="practice-card-content">
                         <h3>Education Law</h3>
                         <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit
                             non</p>
                         <a class="cta-button-light" href="">Learn More</a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 mb-4">
                 <div class="practice-card">
                     <div class="practice-card-image">
                         <img src="https://picsum.photos/id/50/400/250" alt="Criminal Law">
                     </div>
                     <div class="practice-card-content">
                         <h3>Criminal Law</h3>
                         <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit
                             non</p>
                         <a class="cta-button-light" href="">Learn More</a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 mb-4">
                 <div class="practice-card">
                     <div class="practice-card-image">
                         <img src="https://picsum.photos/id/60/400/250" alt="Cyber Law">
                     </div>
                     <div class="practice-card-content">
                         <h3>Cyber Law</h3>
                         <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit
                             non</p>
                         <a class="cta-button-light" href="">Learn More</a>
                     </div>
                 </div>
             </div> --}}
         </div>
     </div>
 </div>
 <!-- Service End -->
