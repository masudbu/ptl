@extends('layouts.app')
@section('content')
<div class="hero-container" id="hero-sec">
    <div class="container-fluid ">
        <div class="row d-flex">
            <div class="col align-middle">
                <div class="px-2 py-2">
                    <img src="https://img.freepik.com/free-vector/happy-freelancer-with-computer-home-young-man-sitting-armchair-using-laptop-chatting-online-smiling-vector-illustration-distance-work-online-learning-freelance_74855-8401.jpg?w=900&t=st=1667037491~exp=1667038091~hmac=7c71ea8afc8f3cc8065c5ccc05d105e3c8a7b76f0133016cb210a7882dc19611" class="img-fluid" alt="...">
                </div>
            </div>
            <div class="col">
            <div class="px-5 py-5 mt-5">
                <div class="px-2 py-2 align-middle">
                <h4>Get all your needs Here</h4>
                <p> An online learning and teaching marketplace with over 204000 courses and 54 million students. Learn programming, marketing, data science and more.</p>
                </div>
                <div class="px-2 py-2">
                  <button type="button" class="btn btn-outline-primary">Checkout</button>
                </div>
              </div>
            </div>
            <!--  Card container  -->
            <div class="card-container bg-black" id="team">
                <div class="container-fluid px-3 py-3">
                    <div class="row center mx-4 my-4 text-white">
                      <h2>Meet Our Expert</h2>
                      <p>Highly professional team</p>
                    </div>
                <div class="row mb-5">
                    <div class="col">
                        <div class="card" >
                            <img src="https://img.freepik.com/free-vector/work-time-concept-illustration_114360-1474.jpg?w=740&t=st=1667038053~exp=1667038653~hmac=7f51a4d7c9f7dc9e0e3a6d53d45f381fc455e5424bcc36a0bedca65db24487e7" class="card-img-top" style="height:300px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Martina doena</h5>
                                <p class="card-text">Highly proficient in Web3 and AI and professional in Designing Websites with tools of Web3.0.</p>
                                <a href="#" class="btn org-btn">Learn More.</a>
                            </div>
                        </div>
                    </div> 
                    <div class="col">
                        <div class="card" >
                            <img src="https://img.freepik.com/free-vector/teaching-concept-illustration_114360-1708.jpg?w=740&t=st=1667038099~exp=1667038699~hmac=d144ede4a891a4bfcb57b109cc26614850ed35f5260bbf32541845325c476dbb" class="card-img-top" style="height:300px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jhon Doe</h5>
                                <p class="card-text">Expert in all aspects of coding and knowledgeable about a wide range of coding languages</p>
                                <a href="#" class="btn org-btn">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
