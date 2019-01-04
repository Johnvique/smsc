@extends('layouts.all')

@section('content')
    <div class="uk-container uk-margin">
        <h1 class="uk-heading-line uk-text-center"><span>COURSES</span></h1>
        <p class="uk-text-large uk-text-center@m uk-text-muted uk-margin-medium-bottom">
            The Best Courses Ever
        </p>
        <div class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center" uk-grid>
            <div>
                <div class="uk-card uk-animation-slide-left uk-card-hover uk-card-body">
                    <span class="uk-text-warning" uk-icon="icon: copy; ratio: 3.5"></span>
                    <h1 class="uk-text-large"><span class="uk-text-background">Diploma in Secretarial Studies</h1>
                    <p class="uk-text-small uk-text-left uk-text-emphasis">
                        By choosing secretarial studies, you are doing just that: stacking the odds in your favour. Secretaries are fortunate enough to be able to work in any environment and in any industry. This opens up many possibilities, and gives...
                    </p>
                    <p uk-margin>
                        <button class="uk-button uk-button-danger">Read More</button>
                    </p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-animation-slide-top-medium uk-card-default uk-card-body">
                    <span class="uk-text-success" uk-icon="icon: grid; ratio: 3.5"></span>
                    <h1 class="uk-text-large"><span class="uk-text-background">Diploma In Business Management</h1>
                    <p class="uk-text-small uk-text-left uk-text-emphasis">
                        Studying a Business Management Course at st.Mary's college enables our students to develop a broad understanding of business organisations and provides them with subject-specific...
                    </p>
                    <p uk-margin>
                        <button class="uk-button uk-button-danger">Read More</button>
                    </p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-animation-slide-bottom-medium uk-card-hover uk-card-body">
                    <span class="uk-text-warning" uk-icon="icon: album; ratio: 3.5"></span>
                    <h1 class="uk-text-large"><span class="uk-text-background">Certificate in Secretarial Studies</h1>
                    <p class="uk-text-small uk-text-left uk-text-emphasis">
                        The successful student in secretarial services performs skilled clerical work, and provide general secretarial support to department administrators. The Secretary will be responsible for assisting... 
                    </p>
                    <p uk-margin>
                        <button class="uk-button uk-button-danger">Read More</button>
                    </p>
                </div>
            </div>

            <div>
                <div class="uk-card uk-animation-slide-left uk-card-hover uk-card-body">
                    <span class="uk-text-success" uk-icon="icon: check; ratio: 3.5"></span>
                    <h1 class="uk-text-large"><span class="uk-text-background">Certified Public Accountant(CPA)</h1>
                    <p class="uk-text-small uk-text-left uk-text-emphasis">
                        Here's a general guideline for how these CPA requirements typically work. Most states require that you have a bachelor's degree in accounting in order to sit for the exam, but not all of... 
                    </p>
                    <p uk-margin>
                        <button class="uk-button uk-button-danger">Read More</button>
                    </p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-animation-slide-top-medium uk-card-default uk-card-body">
                    <span class="uk-text-warning" uk-icon="icon: desktop; ratio: 3.5"></span>
                    <h1 class="uk-text-large"><span class="uk-text-background">Computer Packages</h1>
                    <p class="uk-text-small uk-text-left uk-text-emphasis">
                        The most important aspect of computer science is problem solving, an essential skill for life. Students study the design, development and analysis of software and hardware used to solve problems in a variety of business, scientific and...
                    </p>
                    <p uk-margin>
                        <button class="uk-button uk-button-danger">Read More</button>
                    </p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-animation-slide-bottom-medium uk-card-hover uk-card-body">
                    <span class="uk-text-success" uk-icon="icon: credit-card; ratio: 3.5"></span>
                    <h1 class="uk-text-large"><span class="uk-text-background">Certificate in Accounting and Management System</h1>
                    <p class="uk-text-small uk-text-left uk-text-emphasis">
                        Financial accounting is roughly defined as the practices and processes by which financial transactions are recorded, monitored, analysed and managed. Professional accountants play a direct role in the financial performance...
                    </p>
                    <p uk-margin>
                        <button class="uk-button uk-button-danger">Read More</button>
                    </p>
                </div>
            </div>
        </div>

        <h1 class="uk-heading-line uk-text-center"><span>School Management</span></h1>
        <p class="uk-text-large uk-text-center@m uk-text-muted uk-margin-medium-bottom">
            The Best Management Board
        </p>
        <div class="uk-child-width-1-2@s" uk-grid>
            <div>
                <div class="uk-panel uk-margin-bottom">
                    <img class="uk-align-left uk-margin-remove-adjacent uk-box-shadow-large uk-box-shadow-hover-medium uk-padding" src="{{asset('assets/images/therese.jpg')}}" width="225" height"150" alt="Example image">
                    <h2>Sister Therese</h2>
                    <p class="uk-text-warning"> School Principal </p>
                    <p class="uk-text-muted"> The role of a principal is to provide strategic direction in the school system. Principals develop standardized curricula, assess teaching methods, monitor student achievement, encourage parent involvement, revise policies and procedures, administer the budget, hire and evaluate staff and oversee facilities.</p>
                </div>

                <div class="uk-panel">
                    <img class="uk-align-left uk-margin-remove-adjacent uk-box-shadow-large uk-box-shadow-hover-medium uk-padding" src="{{asset('assets/images/maingi.png')}}" width="225" height"150" alt="Example image">
                    <h2>Mr. David Maingi</h2>
                    <p class="uk-text-success"> Head of Secretarial Department</p>
                    <p class="uk-text-muted"> The prime role of the Head of Secretarial Department is to provide strong academic leadership in Secretarial Sector.The Head of Department is required to lead, manage and develop the department to ensure it achieves the highest possible standards of excellence in all its activities.He takes care of administrative details,schedules appointments and handles school communication</p>
                </div>
            </div>
            <div>
                <div class="uk-panel">
                    <img class="uk-align-left uk-margin-remove-adjacent uk-box-shadow-large uk-box-shadow-hover-medium uk-padding" src="{{asset('assets/images/program.JPG')}}" width="225" height"150" alt="Example image">
                    <h2>Bishop</h2>
                    <p class="uk-text-primary"> Meet The School Bishop</p>
                    <p class="uk-text-muted"> He cares deeply about reaching the next generation with the Gospel.He always work out to make Christ real to the students because they are the ones who will shape tommorow's future.His mission is to shape young people into the Christ followers, leaders, ministers, servants, and disciples of tomorrow, and He do performs it in the midst of the most volatile and formative period in their lives while in Scool. </p>
                </div>
                {{-- <div class="uk-panel">
                    <img class="uk-align-left uk-margin-remove-adjacent uk-box-shadow-large uk-box-shadow-hover-medium uk-padding" src="{{asset('assets/images/maingi.png')}}" width="225" height"150" alt="Example image">
                    <h2>Mr. David Maingi</h2>
                    <p class="uk-text-success"> Head of Secretarial Department</p>
                    <p class="uk-text-muted"> The prime role of the Head of Secretarial Department is to provide strong academic leadership in Secretarial Sector.The Head of Department is required to lead, manage and develop the department to ensure it achieves the highest possible standards of excellence in all its activities.He takes care of administrative details,schedules appointments and handles school communication</p>
                </div> --}}
            </div>
        </div>
        <br>
        <hr class="uk-divider-primary uk-divider-icon">
        <br>

        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="{{asset('assets/images/pic6.png')}}" alt="" uk-cover>
                <canvas width="600" height="400"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">School Management</h3>
                    <p>The board's main function is to manage the school on behalf of the patron and for the benefit of the students and to provide an appropriate education for each student at the school. The board is accountable to the patron and the Minister for Education and Skills. </p>
                </div>
            </div>
        </div>

        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="{{asset('assets/images/Picture3.png')}}" alt="" uk-cover>
                <canvas width="600" height="400"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Sundays Opening Mass Session </h3>
                    <p> The Sunday Service Mass holds utmost importance in the lives of Students because it allows them to receive the Holy Eucharist,or Communion, to put God first above all idols according to the Catholic First Commandment, and to observe the holiness of the Sabbath as part of the Third Commandment.The Mass ceremony consists of two parts:the Liturgy of the Word,and the Liturgy of the Eucharist. </p>
                </div>
            </div>
        </div>

        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="{{asset('assets/images/Picture2.png')}}" alt="" uk-cover>
                <canvas width="600" height="400"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">We Also Encourage Co-Cirriculum Activities </h3>
                    <p>Co-curricular are majorly the activities, programs, and learning experiences that complement,in some way,what students are learning in school.They helps in improving students learning experience at school which improves their attendance at school and increases participation rate by students in co-curricular activities.This helps students develop leadership skills,team integrity and coordination skills. </p>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="uk-section-default">
        <div class="uk-section uk-light uk-background-cover" style="background-image: url(assets/images/Picture7.png)">
            <div class="uk-container">

                <div class="uk-panel uk-light uk-margin-medium">
                    <h3>Section Primary with cards</h3>
                </div>

                <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                    <div>
                        <div class="uk-card uk-animation-slide-left uk-card-hover uk-card-body">
                            <span class="uk-text-warning" uk-icon="icon: copy; ratio: 3.5"></span>
                            <h1 class="uk-text-large"><span class="uk-text-background">Diploma in Secretarial Studies</h1>
                            <p class="uk-text-small uk-text-left uk-text-emphasis">
                                By choosing secretarial studies, you are doing just that: stacking the odds in your favour. Secretaries are fortunate enough to be able to work in any environment and in any industry. This opens up many possibilities, and gives...
                            </p>
                            <p uk-margin>
                                <button class="uk-button uk-button-danger">Read More</button>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-animation-slide-left uk-card-hover uk-card-body">
                            <span class="uk-text-warning" uk-icon="icon: copy; ratio: 3.5"></span>
                            <h1 class="uk-text-large"><span class="uk-text-background">Diploma in Secretarial Studies</h1>
                            <p class="uk-text-small uk-text-left uk-text-emphasis">
                                By choosing secretarial studies, you are doing just that: stacking the odds in your favour. Secretaries are fortunate enough to be able to work in any environment and in any industry. This opens up many possibilities, and gives...
                            </p>
                            <p uk-margin>
                                <button class="uk-button uk-button-danger">Read More</button>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-animation-slide-left uk-card-hover uk-card-body">
                            <span class="uk-text-warning" uk-icon="icon: copy; ratio: 3.5"></span>
                            <h1 class="uk-text-large"><span class="uk-text-background">Diploma in Secretarial Studies</h1>
                            <p class="uk-text-small uk-text-left uk-text-emphasis">
                                By choosing secretarial studies, you are doing just that: stacking the odds in your favour. Secretaries are fortunate enough to be able to work in any environment and in any industry. This opens up many possibilities, and gives...
                            </p>
                            <p uk-margin>
                                <button class="uk-button uk-button-danger">Read More</button>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}


@endsection


