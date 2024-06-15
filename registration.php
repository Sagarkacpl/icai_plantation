<?php 
session_start();
error_reporting(0);
include('include/dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ICAI 75</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-4 login-half-bg d-flex flex-row">
            <div class="brand-logo text-left ml-4 mt-4">
              <a href="index.html"><img src="images/arete-logo-2.png" alt="logo"></a>
            </div>
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Design & Developed by Aretesoftwares.com</p>
          </div>
          <div class="col-lg-8 d-flex align-items-center justify-content-center pl-4 pr-4 bg-white">
            <div class="auth-form-transparent text-left p-3">
              <div class="row">
                <div>
                  <h4 class="text-black">Plantation</h4>
                  <h6 class="font-weight-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6>
                </div>
                <div class="col-md-12">
                  <ul id="myTabs" class="nav nav-pills nav-justified pt-3" role="tablist" data-tabs="tabs">
                    <li><a href="#Members-students" data-toggle="tab" class="active">Members / Students /  Others</a></li>
                    <li><a href="#RegionalCommittee" data-toggle="tab">Branch / Regional Council</a></li>
                  </ul>
                </div>
              </div>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active show" id="Members-students">
                  <form class="pt-3" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="form_type" value="Members" class="form-control">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Name </label>
                          <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                              <span class="input-group-text bg-transparent border-right-0">
                                <i class="mdi mdi-account-outline text-primary"></i>
                              </span>
                            </div>
                            <input type="text" name="username" class="form-control form-control-lg border-left-0" id="" placeholder="Name" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Email Id </label>
                          <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                              <span class="input-group-text bg-transparent border-right-0">
                                <i class="mdi mdi-email-outline text-primary"></i>
                              </span>
                            </div>
                            <input type="text" name="email" class="form-control form-control-lg border-left-0" id="" placeholder="Email Id" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="TypeofPlantation">Are You a</label>
                          <div class="input-group">
                            <select name="selectareyou" id="" class="form-control form-control-lg border-left-0" required>
                              <option value="">Please Select</option>
                              <option value="Member">Member</option>
                              <option value="Student">Student</option>
                              <option value="Others">Others</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">State</label>
                          <div class="input-group">
                            <select name="State" id="inputState" class="form-control form-control-lg border-left-0" required>
                                <option value="">Select</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madya Pradesh">Madya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Orissa">Orissa</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttaranchal">Uttaranchal</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="West Bengal">West Bengal</option>
                                <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadeep">Lakshadeep</option>
                                <option value="Pondicherry">Pondicherry</option>
                              </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="TypeofPlantation">Village/Town/City </label>
                          <div class="input-group">
                            <select name="City" id="inputDistrict" class="form-control form-control-lg border-left-0" required>
                              <option value="">Please Select</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Date of Plantation </label>
                          <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                              <span class="input-group-text bg-transparent border-right-0">
                                <i class="mdi mdi-calendar-outline text-primary"></i>
                              </span>
                            </div>
                            <input type="date" name="dateofPlantation" class="form-control form-control-lg border-left-0" id="" placeholder=" " required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="TypeofPlantation">Planted on</label>
                          <div class="input-group">
                            <select name="PlantedOn" id="" class="form-control form-control-lg border-left-0" required>
                              <option value="">Please Select</option>
                              <option value="Land">Land</option>
                              <option value="Pot">Pot</option>
                              <option value="Both">Both</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="TypeofPlantation">Location of Plantation</label>
                          <div class="input-group">
                            <select name="PlantationLocation" id="" class="form-control form-control-lg border-left-0" required>
                              <option value="">Please Select</option>
                              <option value="Home">Home</option>
                              <option value="Office Premises">Office Premises</option>
                              <option value="School">School</option>
                              <option value="Colleges">Colleges</option>
                              <option value="Roadside">Roadside</option>
                              <option value="Public Place">Public Place</option>
                              <option value="Public Parks">Public Parks</option>
                              <option value="Others">Others</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Planting Count </label>
                          <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                              <span class="input-group-text bg-transparent border-right-0">
                                <i class="mdi mdi-account-outline text-primary"></i>
                              </span>
                            </div>
                            <input type="text" name="PlantingCount" class="form-control form-control-lg border-left-0" id="" placeholder="Planting Count" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="emailid">Upload a photograph of yourself with your planted sapling/pot </label>
                          <div class="input-group">
                            <input type="file" name="SelfPhoto" class="form-control form-control-lg" id="" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="TypeofPlantation">The Photographs and certificate can be used by ICAI for publicity</label>
                          <div class="input-group">
                            <select name="PhotographCertificate" id="" class="form-control form-control-lg border-left-0" required>
                              <option value="">Please Select</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-check pl-4 m-0">
                          <input class="form-check-input" type="checkbox" value="" id="DeclarationCheckd" required>
                          <label class="pt-1" for="DeclarationCheckd">
                            <strong>Declaration:</strong> I certify the above to be correct
                          <i class="input-helper"></i></label>
                        </div>
                      </div>
                    </div>
                    <div class="my-3">
                      <button type="submit" name="formAsubmit" id="form1btn" class="btn btn-info btn-lg font-weight-medium auth-form-btn" disabled >SUBMT</button>
                    </div>              
                    <script>
                      document.getElementById('DeclarationCheckd').addEventListener('change', function() {
                        var submitButton = document.getElementById('form1btn');
                        submitButton.disabled = !this.checked;
                      });
                    </script>
                  </form>
                </div>
                <?php 
                  if(isset($_POST['formAsubmit']))
                  {
                    $form_type = mysqli_real_escape_string($db, $_POST['form_type']);
                    $username = mysqli_real_escape_string($db, $_POST['username']);
                    $email = mysqli_real_escape_string($db, $_POST['email']);
                    $selectareyou = mysqli_real_escape_string($db, $_POST['selectareyou']);
                    $State = mysqli_real_escape_string($db, $_POST['State']);
                    $City = mysqli_real_escape_string($db, $_POST['City']);
                    $dateofPlantation = mysqli_real_escape_string($db, $_POST['dateofPlantation']);
                    $PlantedOn = mysqli_real_escape_string($db, $_POST['PlantedOn']);
                    $PlantationLocation = mysqli_real_escape_string($db, $_POST['PlantationLocation']);
                    $PlantingCount = mysqli_real_escape_string($db, $_POST['PlantingCount']);
                    $PhotographCertificate = mysqli_real_escape_string($db, $_POST['PhotographCertificate']);
                    
                    if ($_FILES['SelfPhoto'] != '') {
                        $allowed_extensions21 = array('jpg', 'jpeg', 'png','PNG');
                        $SelfPhoto1 = time() . "-" . rand(1000, 9999) . "-DOC-" . $_FILES['SelfPhoto']['name'];
                        $SelfPhoto2 = $_FILES["SelfPhoto"]["name"];
                        $file_extension21 = strtolower(pathinfo($SelfPhoto2, PATHINFO_EXTENSION));
                        
                        if ($_FILES["SelfPhoto"]["name"] != '' && in_array($file_extension21, $allowed_extensions21)) {
                            if (move_uploaded_file($_FILES["SelfPhoto"]["tmp_name"], "storage/SelfPhoto/" . $SelfPhoto1)) {
                                $SelfPhotoFInal = $SelfPhoto1;
                            }
                        }
                    }


                   
                    $formAQuery = mysqli_query($db, "INSERT INTO `plantation_form` (`ID`, `Name`, `Email`, `Youarea`, `State`, `City`, `DateOfPlantation`, `PlantOn`, `PlantaionLocation`, `PlantationCount`, `Image`, `Certificate`, `MobileNo`, `AddressofLocation`, `FormType`, `DeletedStatus`, `CreatedAt`) VALUES (NULL, '$username', '$email', '$selectareyou', '$State', '$City', '$dateofPlantation', '$PlantedOn', '$PlantationLocation', '$PlantingCount', '$SelfPhotoFInal', '$PhotographCertificate', NULL, NULL, '$form_type', '0', current_timestamp())");

                    if($formAQuery)
                    {
                      echo "<script>alert('Details Saved Successfully')</script>";
                      echo "<script>window.location.href='index'</script>";
                    }



                  }
                ?>
                <div role="tabpanel" class="tab-pane fade" id="RegionalCommittee">
                  <form class="pt-3">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Name </label>
                          <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                              <span class="input-group-text bg-transparent border-right-0">
                                <i class="mdi mdi-account-outline text-primary"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control form-control-lg border-left-0" id="" placeholder="Name " required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Email Id </label>
                          <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                              <span class="input-group-text bg-transparent border-right-0">
                                <i class="mdi mdi-email-outline text-primary"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control form-control-lg border-left-0" id="" placeholder="Email Id" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Mobile No </label>
                          <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                              <span class="input-group-text bg-transparent border-right-0">
                                <i class="mdi mdi-email-outline text-primary"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control form-control-lg border-left-0" id="" placeholder="Mobile No" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="TypeofPlantation">Name of the Concerned Person</label>
                          <div class="input-group">
                            <select name="" id="" class="form-control form-control-lg border-left-0" required>
                              <option value="">Please Select</option>
                              <option value="">Chairman</option>
                              <option value="">Vice-Chairman</option>
                              <option value="">Secretary</option>
                              <option value="">Treasure</option>
                              <option value="">Official of branch</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">State</label>
                          <div class="input-group">
                            <select name="" id="" class="form-control form-control-lg border-left-0" required>
                              <option value="">Please Select</option>
                              <option value="">Test</option>
                              <option value="">Test</option>
                              <option value="">Test</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="TypeofPlantation">City </label>
                          <div class="input-group">
                            <select name="" id="" class="form-control form-control-lg border-left-0" required>
                              <option value="">Please Select</option>
                              <option value="">Test</option>
                              <option value="">Test</option>
                              <option value="">Test</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Date of Plantation </label>
                          <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                              <span class="input-group-text bg-transparent border-right-0">
                                <i class="mdi mdi-calendar-outline text-primary"></i>
                              </span>
                            </div>
                            <input type="date" class="form-control form-control-lg border-left-0" id="" placeholder=" " required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="TypeofPlantation">Planted on</label>
                          <div class="input-group">
                            <select name="" id="" class="form-control form-control-lg border-left-0" required>
                              <option value="">Please Select</option>
                              <option value="">Land</option>
                              <option value="">Pot</option>
                              <option value="">Both</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="TypeofPlantation">Location of Plantation</label>
                          <div class="input-group">
                            <select name="" id="" class="form-control form-control-lg border-left-0" required>
                              <option value="">Please Select</option>
                              <option value="">Home</option>
                              <option value="">Office Premises</option>
                              <option value="">School</option>
                              <option value="">Colleges</option>
                              <option value="">Roadside</option>
                              <option value="">Public Place</option>
                              <option value="">Public Parks</option>
                              <option value="">Others</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="">Planting Count </label>
                          <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                              <span class="input-group-text bg-transparent border-right-0">
                                <i class="mdi mdi-account-outline text-primary"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control form-control-lg border-left-0" id="" placeholder="Planting Count" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="emailid">Address of Location</label>
                          <div class="input-group">
                            <input type="text" class="form-control form-control-lg" id="" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="emailid">Upload a photograph of yourself with your planted sapling/pot </label>
                          <div class="input-group">
                            <input type="file" class="form-control form-control-lg" id="" required>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="col-md-6">
                        <div class="form-group">
                          <label for="TypeofPlantation">The Photographs and certificate can be used by ICAI for publicity</label>
                          <div class="input-group">
                            <select name="" id="" class="form-control form-control-lg border-left-0">
                              <option value="">Please Select</option>
                              <option value="">Yes</option>
                              <option value="">No</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-check pl-4 m-0">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                          <label class="pt-1" for="flexCheckChecked">
                            <strong>Declaration:</strong> I certify the above to be correct
                          <i class="input-helper"></i></label>
                        </div>
                      </div> -->
                    </div>
                    <div class="my-3">
                      <a class="btn btn-info btn-lg font-weight-medium auth-form-btn" href="#">SUBMIT</a>
                    </div>              
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <script>
    var AndhraPradesh = ["Anantapur", "Chittoor", "East Godavari", "Guntur", "Kadapa", "Krishna", "Kurnool", "Prakasam", "Nellore", "Srikakulam", "Visakhapatnam", "Vizianagaram", "West Godavari"];
      var ArunachalPradesh = ["Anjaw", "Changlang", "Dibang Valley", "East Kameng", "East Siang", "Kra Daadi", "Kurung Kumey", "Lohit", "Longding", "Lower Dibang Valley", "Lower Subansiri", "Namsai", "Papum Pare", "Siang", "Tawang", "Tirap", "Upper Siang", "Upper Subansiri", "West Kameng", "West Siang", "Itanagar"];
      var Assam = ["Baksa", "Barpeta", "Biswanath", "Bongaigaon", "Cachar", "Charaideo", "Chirang", "Darrang", "Dhemaji", "Dhubri", "Dibrugarh", "Goalpara", "Golaghat", "Hailakandi", "Hojai", "Jorhat", "Kamrup Metropolitan", "Kamrup (Rural)", "Karbi Anglong", "Karimganj", "Kokrajhar", "Lakhimpur", "Majuli", "Morigaon", "Nagaon", "Nalbari", "Dima Hasao", "Sivasagar", "Sonitpur", "South Salmara Mankachar", "Tinsukia", "Udalguri", "West Karbi Anglong"];
      var Bihar = ["Araria", "Arwal", "Aurangabad", "Banka", "Begusarai", "Bhagalpur", "Bhojpur", "Buxar", "Darbhanga", "East Champaran", "Gaya", "Gopalganj", "Jamui", "Jehanabad", "Kaimur", "Katihar", "Khagaria", "Kishanganj", "Lakhisarai", "Madhepura", "Madhubani", "Munger", "Muzaffarpur", "Nalanda", "Nawada", "Patna", "Purnia", "Rohtas", "Saharsa", "Samastipur", "Saran", "Sheikhpura", "Sheohar", "Sitamarhi", "Siwan", "Supaul", "Vaishali", "West Champaran"];
      var Chhattisgarh = ["Balod", "Baloda Bazar", "Balrampur", "Bastar", "Bemetara", "Bijapur", "Bilaspur", "Dantewada", "Dhamtari", "Durg", "Gariaband", "Janjgir Champa", "Jashpur", "Kabirdham", "Kanker", "Kondagaon", "Korba", "Koriya", "Mahasamund", "Mungeli", "Narayanpur", "Raigarh", "Raipur", "Rajnandgaon", "Sukma", "Surajpur", "Surguja"];
      var Goa = ["North Goa", "South Goa"];
      var Gujarat = ["Ahmedabad", "Amreli", "Anand", "Aravalli", "Banaskantha", "Bharuch", "Bhavnagar", "Botad", "Chhota Udaipur", "Dahod", "Dang", "Devbhoomi Dwarka", "Gandhinagar", "Gir Somnath", "Jamnagar", "Junagadh", "Kheda", "Kutch", "Mahisagar", "Mehsana", "Morbi", "Narmada", "Navsari", "Panchmahal", "Patan", "Porbandar", "Rajkot", "Sabarkantha", "Surat", "Surendranagar", "Tapi", "Vadodara", "Valsad"];
      var Haryana = ["Ambala", "Bhiwani", "Charkhi Dadri", "Faridabad", "Fatehabad", "Gurugram", "Hisar", "Jhajjar", "Jind", "Kaithal", "Karnal", "Kurukshetra", "Mahendragarh", "Mewat", "Palwal", "Panchkula", "Panipat", "Rewari", "Rohtak", "Sirsa", "Sonipat", "Yamunanagar"];
      var HimachalPradesh = ["Bilaspur", "Chamba", "Hamirpur", "Kangra", "Kinnaur", "Kullu", "Lahaul Spiti", "Mandi", "Shimla", "Sirmaur", "Solan", "Una"];
      var JammuKashmir = ["Anantnag", "Bandipora", "Baramulla", "Budgam", "Doda", "Ganderbal", "Jammu", "Kargil", "Kathua", "Kishtwar", "Kulgam", "Kupwara", "Leh", "Poonch", "Pulwama", "Rajouri", "Ramban", "Reasi", "Samba", "Shopian", "Srinagar", "Udhampur"];
      var Jharkhand = ["Bokaro", "Chatra", "Deoghar", "Dhanbad", "Dumka", "East Singhbhum", "Garhwa", "Giridih", "Godda", "Gumla", "Hazaribagh", "Jamtara", "Khunti", "Koderma", "Latehar", "Lohardaga", "Pakur", "Palamu", "Ramgarh", "Ranchi", "Sahebganj", "Seraikela Kharsawan", "Simdega", "West Singhbhum"];
      var Karnataka = ["Bagalkot", "Bangalore Rural", "Bangalore Urban", "Belgaum", "Bellary", "Bidar", "Vijayapura", "Chamarajanagar", "Chikkaballapur", "Chikkamagaluru", "Chitradurga", "Dakshina Kannada", "Davanagere", "Dharwad", "Gadag", "Gulbarga", "Hassan", "Haveri", "Kodagu", "Kolar", "Koppal", "Mandya", "Mysore", "Raichur", "Ramanagara", "Shimoga", "Tumkur", "Udupi", "Uttara Kannada", "Yadgir"];
      var Kerala = ["Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod", "Kollam", "Kottayam", "Kozhikode", "Malappuram", "Palakkad", "Pathanamthitta", "Thiruvananthapuram", "Thrissur", "Wayanad"];
      var MadhyaPradesh = ["Agar Malwa", "Alirajpur", "Anuppur", "Ashoknagar", "Balaghat", "Barwani", "Betul", "Bhind", "Bhopal", "Burhanpur", "Chhatarpur", "Chhindwara", "Damoh", "Datia", "Dewas", "Dhar", "Dindori", "Guna", "Gwalior", "Harda", "Hoshangabad", "Indore", "Jabalpur", "Jhabua", "Katni", "Khandwa", "Khargone", "Mandla", "Mandsaur", "Morena", "Narsinghpur", "Neemuch", "Panna", "Raisen", "Rajgarh", "Ratlam", "Rewa", "Sagar", "Satna",
         "Sehore", "Seoni", "Shahdol", "Shajapur", "Sheopur", "Shivpuri", "Sidhi", "Singrauli", "Tikamgarh", "Ujjain", "Umaria", "Vidisha"
      ];
      var Maharashtra = ["Ahmednagar", "Akola", "Amravati", "Aurangabad", "Beed", "Bhandara", "Buldhana", "Chandrapur", "Dhule", "Gadchiroli", "Gondia", "Hingoli", "Jalgaon", "Jalna", "Kolhapur", "Latur", "Mumbai City", "Mumbai Suburban", "Nagpur", "Nanded", "Nandurbar", "Nashik", "Osmanabad", "Palghar", "Parbhani", "Pune", "Raigad", "Ratnagiri", "Sangli", "Satara", "Sindhudurg", "Solapur", "Thane", "Wardha", "Washim", "Yavatmal"];
      var Manipur = ["Bishnupur", "Chandel", "Churachandpur", "Imphal East", "Imphal West", "Jiribam", "Kakching", "Kamjong", "Kangpokpi", "Noney", "Pherzawl", "Senapati", "Tamenglong", "Tengnoupal", "Thoubal", "Ukhrul"];
      var Meghalaya = ["East Garo Hills", "East Jaintia Hills", "East Khasi Hills", "North Garo Hills", "Ri Bhoi", "South Garo Hills", "South West Garo Hills", "South West Khasi Hills", "West Garo Hills", "West Jaintia Hills", "West Khasi Hills"];
      var Mizoram = ["Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha", "Serchhip", "Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha", "Serchhip"];
      var Nagaland = ["Dimapur", "Kiphire", "Kohima", "Longleng", "Mokokchung", "Mon", "Peren", "Phek", "Tuensang", "Wokha", "Zunheboto"];
      var Odisha = ["Angul", "Balangir", "Balasore", "Bargarh", "Bhadrak", "Boudh", "Cuttack", "Debagarh", "Dhenkanal", "Gajapati", "Ganjam", "Jagatsinghpur", "Jajpur", "Jharsuguda", "Kalahandi", "Kandhamal", "Kendrapara", "Kendujhar", "Khordha", "Koraput", "Malkangiri", "Mayurbhanj", "Nabarangpur", "Nayagarh", "Nuapada", "Puri", "Rayagada", "Sambalpur", "Subarnapur", "Sundergarh"];
      var Punjab = ["Amritsar", "Barnala", "Bathinda", "Faridkot", "Fatehgarh Sahib", "Fazilka", "Firozpur", "Gurdaspur", "Hoshiarpur", "Jalandhar", "Kapurthala", "Ludhiana", "Mansa", "Moga", "Mohali", "Muktsar", "Pathankot", "Patiala", "Rupnagar", "Sangrur", "Shaheed Bhagat Singh Nagar", "Tarn Taran"];
      var Rajasthan = ["Ajmer", "Alwar", "Banswara", "Baran", "Barmer", "Bharatpur", "Bhilwara", "Bikaner", "Bundi", "Chittorgarh", "Churu", "Dausa", "Dholpur", "Dungarpur", "Ganganagar", "Hanumangarh", "Jaipur", "Jaisalmer", "Jalore", "Jhalawar", "Jhunjhunu", "Jodhpur", "Karauli", "Kota", "Nagaur", "Pali", "Pratapgarh", "Rajsamand", "Sawai Madhopur", "Sikar", "Sirohi", "Tonk", "Udaipur"];
      var Sikkim = ["East Sikkim", "North Sikkim", "South Sikkim", "West Sikkim"];
      var TamilNadu = ["Ariyalur", "Chennai", "Coimbatore", "Cuddalore", "Dharmapuri", "Dindigul", "Erode", "Kanchipuram", "Kanyakumari", "Karur", "Krishnagiri", "Madurai", "Nagapattinam", "Namakkal", "Nilgiris", "Perambalur", "Pudukkottai", "Ramanathapuram", "Salem", "Sivaganga", "Thanjavur", "Theni", "Thoothukudi", "Tiruchirappalli", "Tirunelveli", "Tiruppur", "Tiruvallur", "Tiruvannamalai", "Tiruvarur", "Vellore", "Viluppuram", "Virudhunagar"];
      var Telangana = ["Adilabad", "Bhadradri Kothagudem", "Hyderabad", "Jagtial", "Jangaon", "Jayashankar", "Jogulamba", "Kamareddy", "Karimnagar", "Khammam", "Komaram Bheem", "Mahabubabad", "Mahbubnagar", "Mancherial", "Medak", "Medchal", "Nagarkurnool", "Nalgonda", "Nirmal", "Nizamabad", "Peddapalli", "Rajanna Sircilla", "Ranga Reddy", "Sangareddy", "Siddipet", "Suryapet", "Vikarabad", "Wanaparthy", "Warangal Rural", "Warangal Urban", "Yadadri Bhuvanagiri"];
      var Tripura = ["Dhalai", "Gomati", "Khowai", "North Tripura", "Sepahijala", "South Tripura", "Unakoti", "West Tripura"];
      var UttarPradesh = ["Agra", "Aligarh", "Allahabad", "Ambedkar Nagar", "Amethi", "Amroha", "Auraiya", "Azamgarh", "Baghpat", "Bahraich", "Ballia", "Balrampur", "Banda", "Barabanki", "Bareilly", "Basti", "Bhadohi", "Bijnor", "Budaun", "Bulandshahr", "Chandauli", "Chitrakoot", "Deoria", "Etah", "Etawah", "Faizabad", "Farrukhabad", "Fatehpur", "Firozabad", "Gautam Buddha Nagar", "Ghaziabad", "Ghazipur", "Gonda", "Gorakhpur", "Hamirpur", "Hapur", "Hardoi", "Hathras", "Jalaun", "Jaunpur", "Jhansi", "Kannauj", "Kanpur Dehat", "Kanpur Nagar", "Kasganj", "Kaushambi", "Kheri", "Kushinagar", "Lalitpur", "Lucknow", "Maharajganj", "Mahoba", "Mainpuri", "Mathura", "Mau", "Meerut", "Mirzapur", "Moradabad", "Muzaffarnagar", "Pilibhit", "Pratapgarh", "Raebareli", "Rampur", "Saharanpur", "Sambhal", "Sant Kabir Nagar", "Shahjahanpur", "Shamli", "Shravasti", "Siddharthnagar", "Sitapur", "Sonbhadra", "Sultanpur", "Unnao", "Varanasi"];
      var Uttarakhand = ["Almora", "Bageshwar", "Chamoli", "Champawat", "Dehradun", "Haridwar", "Nainital", "Pauri", "Pithoragarh", "Rudraprayag", "Tehri", "Udham Singh Nagar", "Uttarkashi"];
      var WestBengal = ["Alipurduar", "Bankura", "Birbhum", "Cooch Behar", "Dakshin Dinajpur", "Darjeeling", "Hooghly", "Howrah", "Jalpaiguri", "Jhargram", "Kalimpong", "Kolkata", "Malda", "Murshidabad", "Nadia", "North 24 Parganas", "Paschim Bardhaman", "Paschim Medinipur", "Purba Bardhaman", "Purba Medinipur", "Purulia", "South 24 Parganas", "Uttar Dinajpur"];
      var AndamanNicobar = ["Nicobar", "North Middle Andaman", "South Andaman"];
      var Chandigarh = ["Chandigarh"];
      var DadraHaveli = ["Dadra Nagar Haveli"];
      var DamanDiu = ["Daman", "Diu"];
      var Delhi = ["Central Delhi", "East Delhi", "New Delhi", "North Delhi", "North East Delhi", "North West Delhi", "Shahdara", "South Delhi", "South East Delhi", "South West Delhi", "West Delhi"];
      var Lakshadweep = ["Lakshadweep"];
      var Puducherry = ["Karaikal", "Mahe", "Puducherry", "Yanam"];
      $("#inputState").change(function () {
         var StateSelected = $(this).val();
         var optionsList;
         var htmlString = "";
         switch (StateSelected) {
            case "Andhra Pradesh":
               optionsList = AndhraPradesh;
               break;
            case "Arunachal Pradesh":
               optionsList = ArunachalPradesh;
               break;
            case "Assam":
               optionsList = Assam;
               break;
            case "Bihar":
               optionsList = Bihar;
               break;
            case "Chhattisgarh":
               optionsList = Chhattisgarh;
               break;
            case "Goa":
               optionsList = Goa;
               break;
            case "Gujarat":
               optionsList = Gujarat;
               break;
            case "Haryana":
               optionsList = Haryana;
               break;
            case "Himachal Pradesh":
               optionsList = HimachalPradesh;
               break;
            case "Jammu and Kashmir":
               optionsList = JammuKashmir;
               break;
            case "Jharkhand":
               optionsList = Jharkhand;
               break;
            case "Karnataka":
               optionsList = Karnataka;
               break;
            case "Kerala":
               optionsList = Kerala;
               break;
            case "Madya Pradesh":
               optionsList = MadhyaPradesh;
               break;
            case "Maharashtra":
               optionsList = Maharashtra;
               break;
            case "Manipur":
               optionsList = Manipur;
               break;
            case "Meghalaya":
               optionsList = Meghalaya;
               break;
            case "Mizoram":
               optionsList = Mizoram;
               break;
            case "Nagaland":
               optionsList = Nagaland;
               break;
            case "Orissa":
               optionsList = Orissa;
               break;
            case "Punjab":
               optionsList = Punjab;
               break;
            case "Rajasthan":
               optionsList = Rajasthan;
               break;
            case "Sikkim":
               optionsList = Sikkim;
               break;
            case "Tamil Nadu":
               optionsList = TamilNadu;
               break;
            case "Telangana":
               optionsList = Telangana;
               break;
            case "Tripura":
               optionsList = Tripura;
               break;
            case "Uttaranchal":
               optionsList = Uttaranchal;
               break;
            case "Uttar Pradesh":
               optionsList = UttarPradesh;
               break;
            case "West Bengal":
               optionsList = WestBengal;
               break;
            case "Andaman and Nicobar Islands":
               optionsList = AndamanNicobar;
               break;
            case "Chandigarh":
               optionsList = Chandigarh;
               break;
            case "Dadar and Nagar Haveli":
               optionsList = DadraHaveli;
               break;
            case "Daman and Diu":
               optionsList = DamanDiu;
               break;
            case "Delhi":
               optionsList = Delhi;
               break;
            case "Lakshadeep":
               optionsList = Lakshadeep;
               break;
            case "Pondicherry":
               optionsList = Pondicherry;
               break;
         }
         for (var i = 0; i < optionsList.length; i++) {
            htmlString = htmlString + "<option value='" + optionsList[i] + "'>" + optionsList[i] + "</option>";
         }
         $("#inputDistrict").html(htmlString);
      });
  </script>
</body>
</html>
