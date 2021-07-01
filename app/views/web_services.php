<!-- Include Header -->
<?php
$pageTitle = "CSWD | Services";
define("ROOT", __DIR__ ."/");
include(ROOT . 'includes/header.php');
include(ROOT . 'includes/topnav.php');
?>

<div class="welcome-banner h-100 d-inline-block w-100 p-2" style="background-image: url('<?= SITE_URL()?>assets/img/header_bg.jpg'); background-repeat: no-repeat; background-size: cover;">
  <div class="w-100 p-2">
    <div class="jumbotron">
      <section class="events-content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div style="border: solid #007bff 1px; padding: 10px;" class="card-body">
                <h3 style="margin-bottom: 50px;" class="text-center"><strong>CSWD : LIST OF ASSISTANCE SERVICES</strong></h3>
                <div class="row">
                  <div class="col-md-12">
                    <!-- Accordion -->
                    <div class="acclist" style="padding-top: 10px; padding-bottom: 10px; text-align: center;">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-sm">
                            <div class="accordion" id="accordionExample">
                              <div class="card text-white bg-primary mb-3">
                                <div class="card-header " id="headingOne">
                                  <h2 class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Provison of Assistance to Individual in Crisis Situation
                                    (AICS)

                                  </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body text-justify">
                                    It is the provision of limited assistance, in cash or in kind, to individuals/families
                                    who are hampered to function normally because of socio-economic difficulties. The
                                    nature of difficulty is usually short term and emergency in nature, thus the assistance
                                    is on a one shot deal basis.         
                                  </div>
                                </div>
                              </div>

                              <div class="card text-white bg-primary mb-3">
                                <div class="card-header" id="headingTwo">
                                  <h2 class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Issuance of Certificate of Indigency
                                  </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body text-justify">
                                    Certificate of indigency is one of the requirements to avail of assistance to
                                    other offices either from government or non-government agencies. Its purpose is to
                                    avail of free service charge or discount.
                                  </div>
                                </div>
                              </div>

                              <div class="card text-white bg-primary mb-3">
                                <div class="card-header" id="headingThree">
                                  <h2 class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Provision of Assistance to Person with Disability
                                  </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                  <div class="card-body text-justify">
                                    Assistance to Person with Disability includes the provision of artificial devices,
                                    issuance of PWD ID and purchase booklet, referral to psychiatrist and psychiatric
                                    hospital.
                                  </div>
                                </div>
                              </div>

                              <div class="card text-white bg-primary mb-3">
                                <div class="card-header" id="headingFour">
                                  <h2 class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Provision of Emergency Shelter Assistance
                                  </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="collapseFour" data-parent="#accordionExample">
                                  <div class="card-body text-justify">
                                    It is the provision of limited financial or material assistance to help families
                                    construct/repair their houses which were partially or totally destroyed by natural or
                                    man-made disasters.
                                  </div>
                                </div>
                              </div>

                              <div class="card text-white bg-primary mb-3">
                                <div class="card-header" id="headingFive">
                                  <h2 class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Provision of Relief Assistance
                                  </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="collapseFive" data-parent="#accordionExample">
                                  <div class="card-body text-justify">
                                    It is the provision of timely and appropriate assistance to help alleviate the
                                    conditions/situations of distressed/displaced individuals/families and those who are
                                    victims of disaster and are in need food, clothing, temporary shelter and other
                                    emergency requirements thru the efficient and effective management of evacuation
                                    centers; provision of ready-to-eat/mass feeding and provision of financial/material
                                    assistance.
                                  </div>
                                </div>
                              </div>



                            </div>
                          </div>
                          <!-- accordion 1 -->

                          <div class="col-sm">
                            <div class="accordion" id="accordionExample1">
                              <div class="card text-white bg-primary mb-3">
                                <div class="card-header" id="heading1">
                                  <h2 class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    Services to Older Persons
                                  </h2>
                                </div>

                                <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample1">
                                  <div class="card-body text-justify">
                                    Case management service is one of the services in response to the needs of
                                    elderly who has been neglected and abandoned. This can be done thru counselling,
                                    home visitation, referral and networking. Other services extended are the granting of
                                    financial assistance to 85-95 years old as per City Ordinance # 18 and Resolution #862
                                    and to Centenarian as per Resolution 1070, City Ordinance 34. 

                                  </div>
                                </div>
                              </div>

                              <div class="card text-white bg-primary mb-3">
                                <div class="card-header" id="heading2">
                                  <h2 class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Psychosocial Intervention to Children in Need of
                                    Special Protection
                                  </h2>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample1">
                                  <div class="card-body text-justify">
                                    Assistance to children in need of special protection is the provision of
                                    immediate interventions to a child (below 18 years of age) to ensure his/her
                                    protection from abuse, neglect and exploitation. These services are preventive and
                                    rehabilitative in nature.
                                  </div>
                                </div>
                              </div>

                              <div class="card text-white bg-primary mb-3">
                                <div class="card-header" id="heading3">
                                  <h2 class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Psychosocial Intervention to Children in Conflict with
                                    the Law (CICL) and Children at Risk (CAR)
                                  </h2>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample1">
                                  <div class="card-body text-justify">
                                    This covers different circumstances involving children at risk and children in
                                    conflict with the law who needs appropriate intervention ranging from prevention to
                                    rehabilitation and reintegration and support to their family through provision of
                                    assistance as perceived by them and worker as well. 
                                  </div>
                                </div>
                              </div>

                              <div class="card text-white bg-primary mb-3">
                                <div class="card-header" id="heading4">
                                  <h2 class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse3">
                                    Provision of Day Care Service Program
                                  </h2>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample1">
                                  <div class="card-body text-justify">
                                    Republic Act No. 6972 otherwise known as “Barangay-level Total Development
                                    and Protection of Children Act” is an act establishing a child development center in
                                    every barangay, instituting therein a total development and protection of children.
                                    Calapan City has a total of 72 Child Development Centers in 62 barangays. It caters
                                    day care children ages 3-4 years old. The program provides opportunities for the total
                                    development of the child through various early childhood care and development
                                    activities. The assigned worker supervises and monitors all Child Development
                                    Centers in the barangays.
                                  </div>
                                </div>
                              </div>   

                            </div>
                          </div>

                          <!-- Accordion 2-->
                          <div class="col-sm">
                            <div class="accordion" id="accordionExample2">
                              <div class="card text-white bg-primary mb-3">
                                <div class="card-header" id="heading5">
                                  <h2 class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                    Social Services for Solo Parents
                                  </h2>
                                </div>

                                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample2">
                                  <div class="card-body text-justify">
                                    This refers to package of services to solo parents to help them resolve conflict
                                    and depression brought about by the loss or absence of their spouses.
                                  </div>
                                </div>
                              </div>
                              <div class="card text-white bg-primary mb-3">
                                <div class="card-header" id="heading6">
                                  <h2 class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    Assistance to Women in Especially Difficult
                                    Circumtances (WEDC)
                                  </h2>
                                </div>
                                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample2">
                                  <div class="card-body text-justify">
                                    Women in especially difficult circumstances are those disadvantaged women
                                    who experienced different abuses including but not limited to physical abuse, sexual
                                    abuse, emotional/psychological abuse. The assistance provided are counselling,
                                    referral to other line agencies, provision of financial assistance and the like.
                                  </div>
                                </div>
                              </div>
                              <div class="card text-white bg-primary mb-3">
                                <div class="card-header" id="heading7">
                                  <h2 class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    Conduct of Pre-Marriage Counseling (PMC)
                                  </h2>
                                </div>
                                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample2">
                                  <div class="card-body text-justify">
                                    Pre-marriage counselling is a four-hour session with couples engaged to be
                                    married. It provides vital information to engage couples about marriage, marital
                                    obligations, and how they could live in harmony with in-laws. It also covers
                                    information about male and female sexuality, spacing of pregnancy, caring for the
                                    family and children’s health and tips on home management. 
                                  </div>
                                </div>
                              </div>
                              <div class="card text-white bg-primary mb-3">
                                <div class="card-header" id="heading8">
                                  <h2 class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    Securing Social Case Study Report
                                  </h2>
                                </div>
                                <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample2">
                                  <div class="card-body text-justify">Social Case Study Report is a document that covers the socio-economic
                                    condition and the social functioning of the client/ family with the assessment of the
                                    social worker. It is needed to secure medical/financial assistance to other charitable
                                    institutions. This is also necessary if the client will be endorsed or referred to other
                                    agency like child-caring or child placement agencies or other institutions requiring the
                                    said document. 
                                  </div>
                                </div>
                              </div>              
                            </div>
                          </div>
                          <!-- Accordion 3 -->
                        </div>
                      </div>
                    </div>                                     
                  </div>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

<!-- Include Footer -->
<?php
include(ROOT . 'includes/footer.php');
?>        