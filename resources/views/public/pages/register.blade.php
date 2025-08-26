@extends('public.newlayout.master')
@section('content')
<h2 align="center">Student Registration</h2>
<div class="card card-primary card-tabs" id="member_form" style="display:"";">
   <div class="card">

     <ul class="nav nav-pills justify-content-center nav-fill" id="custom-tabs-two-tab" role="tablist">

           <li class="nav-item">
               <a class="nav-link active" id="basic-tab" data-toggle="pill" href="#basic" role="tab"
                  aria-controls="basic" aria-selected="true">Personal Details&nbsp;<span><i
                  class="fa fa-angle-double-right"></i></span></a>
           </li>
           <li class="nav-item">
               <a class="nav-link" id="nomination-tab" data-toggle="pill" href="#nomination" role="tab" aria-controls="grooming"
                  aria-selected="false">Qualification&nbsp;<span><i
                  class="fa fa-angle-double-right"></i></span></a>
           </li>
           <li class="nav-item">
               <a class="nav-link" id="file_upload-tab" data-toggle="pill" href="#file_upload" role="tab" aria-controls="file_upload"
                  aria-selected="false"> Skills And Others&nbsp;<span><i
                  class="fa fa-angle-double-right"></i></span></a>
           </li>

        </ul>
</div>
<div class="card-body">
        <div class="tab-content" id="custom-tabs-two-tabContent">
       <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
        <div class="container">
 
  <form>
    <div class="form-group">
      <label for="fullName">Full Name:</label>
      <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="address" class="form-control" id="address" placeholder="Enter your address" required>
    </div>
    <div class="form-group">
      <label for="state">State:</label>
      <input type="state" class="form-control" id="state" placeholder="Enter your state" required>
    </div>
    <div class="form-group">
      <label for="district">District:</label>
      <input type="district" class="form-control" id="district" placeholder="Enter your district" required>
    </div>
    <div class="form-group">
      <label for="pincode">pincode:</label>
      <input type="pincode" class="form-control" id="pincode" placeholder="Enter your pincode" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
</div>
<div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter your date" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>

   <div class="tab-pane fade " id="nomination" role="tabpanel" aria-labelledby="nomination-tab">
   <div class="container">
 
  <form>
  <div class="form-group">
      <label for="college">College/University:</label>
      <input type="text" class="form-control" id="college" placeholder="Enter your college/university name" required>
    </div>
    <div class="form-group">
      <label for="major">Major:</label>
      <input type="text" class="form-control" id="major" placeholder="Enter your major" required>
    </div>
    <div class="form-group">
      <label for="gradYear">Graduation Year:</label>
      <input type="number" class="form-control" id="gradYear" placeholder="Enter your graduation year" required>
    </div>
    <div class="form-group">
      <label for="cgpa">CGPA/GPA:</label>
      <input type="text" class="form-control" id="cgpa" placeholder="Enter your CGPA/GPA" required>
    </div>
    <div class="form-group">
      <label for="resume">Upload Resume:</label>
      <input type="file" class="form-control-file" id="resume" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
<div class="tab-pane fade " id="file_upload" role="tabpanel" aria-labelledby="file_upload-tab">
<div class="container">
 
  <form>
    <div class="form-group">
      <label for="skills">Skills:</label>
      <textarea class="form-control" id="skills" placeholder="Enter your skills (comma-separated)" required></textarea>
    </div>
    <div class="form-group">
      <label for="projects">Projects:</label>
      <textarea class="form-control" id="projects" placeholder="Enter your projects or relevant experiences" required></textarea>
    </div>
    <div class="form-group">
      <label for="certifications">Certifications:</label>
      <textarea class="form-control" id="certifications" placeholder="Enter your certifications or relevant training" required></textarea>
    </div>
    <div class="form-group">
      <label for="linkedin">LinkedIn Profile:</label>
      <input type="url" class="form-control" id="linkedin" placeholder="Enter your LinkedIn profile URL" required>
    </div>
    <div class="form-group">
      <label for="portfolio">Portfolio (if any):</label>
      <input type="url" class="form-control" id="portfolio" placeholder="Enter your portfolio URL">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
