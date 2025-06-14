@extends('layouts.app')
@section('title', 'User Settings')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card mb-3 btn-reveal-trigger">
            <div class="card-header position-relative min-vh-25 mb-8">
                <div class="cover-image">
                    <div class="bg-holder rounded-3 rounded-bottom-0"
                        style="background-image:url(../../assets/img/generic/4.jpg);"></div>
                    <!--/.bg-holder-->
                    <input class="d-none" id="upload-cover-image" type="file" /><label class="cover-image-file-input"
                        for="upload-cover-image"><span class="fas fa-camera me-2"></span><span>Change cover
                            photo</span></label>
                </div>
                <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                    <div class="h-100 w-100 rounded-circle overflow-hidden position-relative"> <img
                            src="../../assets/img/team/2.jpg" width="200" alt=""
                            data-dz-thumbnail="data-dz-thumbnail" /><input class="d-none" id="profile-image"
                            type="file" /><label class="mb-0 overlay-icon d-flex flex-center" for="profile-image"><span
                                class="bg-holder overlay overlay-0"></span><span
                                class="z-1 text-white dark__text-white text-center fs-10"><span
                                    class="fas fa-camera"></span><span class="d-block">Update</span></span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-lg-8 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Profile Settings</h5>
            </div>
            <div class="card-body bg-body-tertiary">
                <form class="row g-3">
                    <div class="col-lg-6"> <label class="form-label" for="first-name">First Name</label><input
                            class="form-control" id="first-name" type="text" value="Anthony" /></div>
                    <div class="col-lg-6"> <label class="form-label" for="last-name">Last Name</label><input
                            class="form-control" id="last-name" type="text" value="Hopkins" /></div>
                    <div class="col-lg-6"> <label class="form-label" for="email1">Email</label><input
                            class="form-control" id="email1" type="text" value="anthony@gmail.com" /></div>
                    <div class="col-lg-6"> <label class="form-label" for="email2">Phone</label><input
                            class="form-control" id="email2" type="text" value="+44098098304" /></div>
                    <div class="col-lg-12"><label class="form-label" for="email3">Heading</label><input
                            class="form-control" id="email3" type="text" value="Software Engineer" /></div>
                    <div class="col-lg-12"> <label class="form-label" for="intro">Intro</label><textarea
                            class="form-control" id="intro" name="intro" cols="30"
                            rows="13">Dedicated, passionate, and accomplished Full Stack Developer with 9+ years of progressive experience working as an Independent Contractor for Google and developing and growing my educational social network that helps others learn programming, web design, game development, networking. I’ve acquired a wide depth of knowledge and expertise in using my technical skills in programming, computer science, software development, and mobile app development to developing solutions to help organizations increase productivity, and accelerate business performance. It’s great that we live in an age where we can share so much with technology but I’m but I’m ready for the next phase of my career, with a healthy balance between the virtual world and a workplace where I help others face-to-face. There’s always something new to learn, especially in IT-related fields. People like working with me because I can explain technology to everyone, from staff to executives who need me to tie together the details and the big picture. I can also implement the technologies that successful projects need.</textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-end"><button class="btn btn-primary" type="submit">Update
                        </button></div>
                </form>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Experiences</h5>
            </div>
            <div class="card-body bg-body-tertiary"><a class="mb-4 d-block d-flex align-items-center"
                    href="settings.html#experience-form1" data-bs-toggle="collapse" aria-expanded="false"
                    aria-controls="experience-form1"><span class="circle-dashed"><span
                            class="fas fa-plus"></span></span><span class="ms-3">Add new experience</span></a>
                <div class="collapse" id="experience-form1">
                    <form class="row">
                        <div class="col-3 mb-3 text-lg-end"><label class="form-label" for="company">Company</label>
                        </div>
                        <div class="col-9 col-sm-7 mb-3"> <input class="form-control form-control-sm" id="company"
                                type="text" /></div>
                        <div class="col-3 mb-3 text-lg-end"><label class="form-label" for="position">Position</label>
                        </div>
                        <div class="col-9 col-sm-7 mb-3"> <input class="form-control form-control-sm" id="position"
                                type="text" /></div>
                        <div class="col-3 mb-3 text-lg-end"><label class="form-label" for="city">City </label></div>
                        <div class="col-9 col-sm-7 mb-3"> <input class="form-control form-control-sm" id="city"
                                type="text" /></div>
                        <div class="col-3 mb-3 text-lg-end"><label class="form-label" for="exp-description">Description
                            </label></div>
                        <div class="col-9 col-sm-7 mb-3"> <textarea class="form-control form-control-sm"
                                id="exp-description" rows="3"> </textarea></div>
                        <div class="col-9 col-sm-7 offset-3 mb-3">
                            <div class="form-check mb-0 lh-1"><input class="form-check-input" type="checkbox"
                                    id="experience-current" checked="checked" /><label class="form-check-label mb-0"
                                    for="experience-current">I currently work here</label></div>
                        </div>
                        <div class="col-3 text-lg-end"><label class="form-label" for="experience-form2">From </label>
                        </div>
                        <div class="col-9 col-sm-7 mb-3"> <input
                                class="form-control form-control-sm text-500 datetimepicker" id="experience-form2"
                                type="text" placeholder="dd/mm/yy"
                                data-options='{"dateFormat":"d/m/y","disableMobile":true}' /></div>
                        <div class="col-3 text-lg-end"><label class="form-label" for="experience-to">To </label></div>
                        <div class="col-9 col-sm-7 mb-3"> <input
                                class="form-control form-control-sm text-500 datetimepicker" id="experience-to"
                                type="text" placeholder="dd/mm/yy"
                                data-options='{"dateFormat":"d/m/y","disableMobile":true}' /></div>
                        <div class="col-9 col-sm-7 offset-3"><button class="btn btn-primary" type="button">Save</button>
                        </div>
                    </form>
                    <div class="border-dashed-bottom my-4"></div>
                </div>
                <div class="d-flex"><a href="settings.html#!"> <img class="img-fluid" src="../../assets/img/logos/g.png"
                            alt="" width="56" /></a>
                    <div class="flex-1 position-relative ps-3">
                        <h6 class="fs-9 mb-0">Big Data Engineer<span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Verified"><small class="fa fa-check-circle text-primary"
                                    data-fa-transform="shrink-4 down-2"></small></span></h6>
                        <p class="mb-1"> <a href="settings.html#!">Google</a></p>
                        <p class="text-1000 mb-0">Apr 2012 - Present &bull; 6 yrs 9 mos</p>
                        <p class="text-1000 mb-0">California, USA</p>
                        <div class="border-bottom border-dashed my-3"></div>
                    </div>
                </div>
                <div class="d-flex"><a href="settings.html#!"> <img class="img-fluid"
                            src="../../assets/img/logos/apple.png" alt="" width="56" /></a>
                    <div class="flex-1 position-relative ps-3">
                        <h6 class="fs-9 mb-0">Software Engineer<span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Verified"><small class="fa fa-check-circle text-primary"
                                    data-fa-transform="shrink-4 down-2"></small></span></h6>
                        <p class="mb-1"> <a href="settings.html#!">Apple</a></p>
                        <p class="text-1000 mb-0">Jan 2012 - Apr 2012 &bull; 4 mos</p>
                        <p class="text-1000 mb-0">California, USA</p>
                        <div class="border-bottom border-dashed my-3"></div>
                    </div>
                </div>
                <div class="d-flex"><a href="settings.html#!"> <img class="img-fluid"
                            src="../../assets/img/logos/nike.png" alt="" width="56" /></a>
                    <div class="flex-1 position-relative ps-3">
                        <h6 class="fs-9 mb-0">Mobile App Developer<span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Verified"><small class="fa fa-check-circle text-primary"
                                    data-fa-transform="shrink-4 down-2"></small></span></h6>
                        <p class="mb-1"> <a href="settings.html#!">Nike</a></p>
                        <p class="text-1000 mb-0">Jan 2011 - Apr 2012 &bull; 1 yr 4 mos</p>
                        <p class="text-1000 mb-0">Beaverton, USA</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3 mb-lg-0">
            <div class="card-header">
                <h5 class="mb-0">Educations</h5>
            </div>
            <div class="card-body bg-body-tertiary"><a class="mb-4 d-block d-flex align-items-center"
                    href="settings.html#education-form" data-bs-toggle="collapse" aria-expanded="false"
                    aria-controls="education-form"><span class="circle-dashed"><span
                            class="fas fa-plus"></span></span><span class="ms-3">Add new education</span></a>
                <div class="collapse" id="education-form">
                    <form class="row">
                        <div class="col-3 mb-3 text-lg-end"><label class="form-label" for="school">School</label></div>
                        <div class="col-9 col-sm-7 mb-3"> <input class="form-control form-control-sm" id="school"
                                type="text" /></div>
                        <div class="col-3 mb-3 text-lg-end"><label class="form-label" for="degree">Degree</label></div>
                        <div class="col-9 col-sm-7 mb-3"> <input class="form-control form-control-sm" id="degree"
                                type="text" /></div>
                        <div class="col-3 mb-3 text-lg-end"><label class="form-label" for="field">Field</label></div>
                        <div class="col-9 col-sm-7 mb-3"> <input class="form-control form-control-sm" id="field"
                                type="text" /></div>
                        <div class="col-3 text-lg-end"><label class="form-label" for="edu-form3">From </label></div>
                        <div class="col-9 col-sm-7 mb-3"> <input class="form-control form-control-sm datetimepicker"
                                id="edu-form3" type="text" placeholder="dd/mm/yy"
                                data-options='{"dateFormat":"d/m/y"}' /></div>
                        <div class="col-3 text-lg-end"><label class="form-label" for="edu-to">To </label></div>
                        <div class="col-9 col-sm-7 mb-3"> <input class="form-control form-control-sm datetimepicker"
                                id="edu-to" type="text" placeholder="dd/mm/yy" data-options='{"dateFormat":"d/m/y"}' />
                        </div>
                        <div class="col-9 col-sm-7 offset-3"><button class="btn btn-primary" type="button">Save</button>
                        </div>
                    </form>
                    <div class="border-dashed-bottom my-3"></div>
                </div>
                <div class="d-flex"><a href="settings.html#!">
                        <div class="avatar avatar-3xl">
                            <div class="avatar-name rounded-circle"><span>SU</span></div>
                        </div>
                    </a>
                    <div class="flex-1 position-relative ps-3">
                        <h6 class="fs-9 mb-0"> <a href="settings.html#!">Stanford University<span
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Verified"><small
                                        class="fa fa-check-circle text-primary"
                                        data-fa-transform="shrink-4 down-2"></small></span></a></h6>
                        <p class="mb-1">Computer Science and Engineering</p>
                        <p class="text-1000 mb-0">2010 - 2014 • 4 yrs</p>
                        <p class="text-1000 mb-0">California, USA</p>
                        <div class="border-bottom border-dashed my-3"></div>
                    </div>
                </div>
                <div class="d-flex"><a href="settings.html#!"> <img class="img-fluid"
                            src="../../assets/img/logos/staten.png" alt="" width="56" /></a>
                    <div class="flex-1 position-relative ps-3">
                        <h6 class="fs-9 mb-0"> <a href="settings.html#!">Staten Island Technical High School<span
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Verified"><small
                                        class="fa fa-check-circle text-primary"
                                        data-fa-transform="shrink-4 down-2"></small></span></a></h6>
                        <p class="mb-1">Higher Secondary School Certificate, Science</p>
                        <p class="text-1000 mb-0">2008 - 2010 &bull; 2 yrs</p>
                        <p class="text-1000 mb-0">New York, USA</p>
                        <div class="border-bottom border-dashed my-3"></div>
                    </div>
                </div>
                <div class="d-flex"><a href="settings.html#!"> <img class="img-fluid"
                            src="../../assets/img/logos/tj-heigh-school.png" alt="" width="56" /></a>
                    <div class="flex-1 position-relative ps-3">
                        <h6 class="fs-9 mb-0"> <a href="settings.html#!">Thomas Jefferson High School for Science and
                                Technology<span data-bs-toggle="tooltip" data-bs-placement="top" title="Verified"><small
                                        class="fa fa-check-circle text-primary"
                                        data-fa-transform="shrink-4 down-2"></small></span></a></h6>
                        <p class="mb-1">Secondary School Certificate, Science</p>
                        <p class="text-1000 mb-0">2003 - 2008 &bull; 5 yrs</p>
                        <p class="text-1000 mb-0">Alexandria, USA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 ps-lg-2">
        <div class="sticky-sidebar">
            <div class="card mb-3 overflow-hidden">
                <div class="card-header">
                    <h5 class="mb-0">Account Settings</h5>
                </div>
                <div class="card-body bg-body-tertiary">
                    <h6 class="fw-bold">Who can see your profile ?<span class="fs-11 ms-1 text-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Only The group of selected people can see your profile"><span
                                class="fas fa-question-circle"></span></span></h6>
                    <div class="ps-2">
                        <div class="form-check mb-0 lh-1"><input class="form-check-input" type="radio" value=""
                                id="everyone" name="view-settings" /><label class="form-check-label mb-0"
                                for="everyone">Everyone</label></div>
                        <div class="form-check mb-0 lh-1"><input class="form-check-input" type="radio" value=""
                                id="my-followers" checked="checked" name="view-settings" /><label
                                class="form-check-label mb-0" for="my-followers">My followers</label></div>
                        <div class="form-check mb-0 lh-1"><input class="form-check-input" type="radio" value=""
                                id="only-me" name="view-settings" /><label class="form-check-label mb-0"
                                for="only-me">Only me</label></div>
                    </div>
                    <h6 class="mt-2 fw-bold">Who can tag you ?<span class="fs-11 ms-1 text-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Only The group of selected people can tag you"><span
                                class="fas fa-question-circle"></span></span></h6>
                    <div class="ps-2">
                        <div class="form-check mb-0 lh-1"><input class="form-check-input" type="radio" value=""
                                id="tag-everyone" name="tag-settings" /><label class="form-check-label mb-0"
                                for="tag-everyone">Everyone</label></div>
                        <div class="form-check mb-0 lh-1"><input class="form-check-input" type="radio" value=""
                                id="group-members" checked="checked" name="tag-settings" /><label
                                class="form-check-label mb-0" for="group-members">Group Members</label></div>
                    </div>
                    <div class="border-dashed-bottom my-3"></div>
                    <div class="form-check mb-0 lh-1"><input class="form-check-input" type="checkbox" id="userSettings1"
                            checked="checked" /><label class="form-check-label mb-0" for="userSettings1">Allow users to
                            show your followers</label></div>
                    <div class="form-check mb-0 lh-1"><input class="form-check-input" type="checkbox" id="userSettings2"
                            checked="checked" /><label class="form-check-label mb-0" for="userSettings2">Allow users to
                            show your email</label></div>
                    <div class="form-check mb-0 lh-1"><input class="form-check-input" type="checkbox"
                            id="userSettings3" /><label class="form-check-label mb-0" for="userSettings3">Allow users to
                            show your experiences</label></div>
                    <div class="border-bottom border-dashed my-3"></div>
                    <div class="form-check form-switch mb-0 lh-1"><input class="form-check-input" type="checkbox"
                            id="flexSwitchCheckDefault" checked="checked" /><label class="form-check-label mb-0"
                            for="flexSwitchCheckDefault">Make your phone number visible</label></div>
                    <div class="form-check form-switch mb-0 lh-1"><input class="form-check-input" type="checkbox"
                            id="flexSwitchCheckChecked" /><label class="form-check-label mb-0"
                            for="flexSwitchCheckChecked">Allow user to follow you</label></div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Billing Setting</h5>
                </div>
                <div class="card-body bg-body-tertiary">
                    <h5>Plan</h5>
                    <p class="fs-9"><strong>Developer</strong>- Unlimited private repositories</p><a
                        class="btn btn-falcon-default btn-sm" href="settings.html#!">Update Plan</a>
                </div>
                <div class="card-body bg-body-tertiary border-top">
                    <h5>Payment</h5>
                    <p class="fs-9">You have not added any payment.</p><a class="btn btn-falcon-default btn-sm"
                        href="settings.html#!">Add Payment </a>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Change Password</h5>
                </div>
                <div class="card-body bg-body-tertiary">
                    <form>
                        <div class="mb-3"><label class="form-label" for="old-password">Old Password</label><input
                                class="form-control" id="old-password" type="password" /></div>
                        <div class="mb-3"><label class="form-label" for="new-password">New Password</label><input
                                class="form-control" id="new-password" type="password" /></div>
                        <div class="mb-3"><label class="form-label" for="confirm-password">Confirm
                                Password</label><input class="form-control" id="confirm-password" type="password" />
                        </div><button class="btn btn-primary d-block w-100" type="submit">Update Password </button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Danger Zone</h5>
                </div>
                <div class="card-body bg-body-tertiary">
                    <h5 class="fs-9">Transfer Ownership</h5>
                    <p class="fs-10">Transfer this account to another user or to an organization where you have the
                        ability to create repositories.</p><a class="btn btn-falcon-warning d-block"
                        href="settings.html#!">Transfer</a>
                    <div class="border-bottom border-dashed my-4"></div>
                    <h5 class="fs-9">Delete this account</h5>
                    <p class="fs-10">Once you delete a account, there is no going back. Please be certain.</p><a
                        class="btn btn-falcon-danger d-block" href="settings.html#!">Deactivate Account</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
