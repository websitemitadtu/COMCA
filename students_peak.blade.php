@include('Frontend/header')

@include('Frontend/COMCA/comca_sidebar')

<div class="right_panel">
    <div class="width100">
        <div class="inner_page_content_box">
            <div class="container">
                <div class="row pt-5 pb-5">
                    <div class="col-lg-1"></div>

                    <div class="col-lg-11">
                        <div class="center_heading left_heading">
                            Students speak
                            <div class="center_head_img left_head_img"></div>
                        </div>

                        <div class="width100">
                            <div class="about_innerContent">
                                {{-- Your content goes here --}}
                                <div class="student-speak-section">
                                    <div class="row g-4">
                                        <!-- Student Card 1 -->
                                        <div class="col-md-6">
                                            <div class="student-card">
                                                <div class="student-photo">
                                                    <img src="{{ asset('assets_web/images/ektasire.png') }}" alt="Ekta Sire" />
                                                </div>
                                                <div class="student-info">
                                                    <h5>Ekta Sire</h5>
                                                    <p><strong>Program:</strong> MBA Business Analytics (III Sem)</p>
                                                    <p class="student-quote">“MIT ADT University has been instrumental in my growth, both personally and professionally.
                                                                            The rigorous academic curriculum and practical exposure through projects and internships
                                                                            equipped me with the necessary skills to excel in the professional world. Additionally, the
                                                                            university&#39;s focus on leadership, communication, and extracurricular activities helped me
                                                                            develop confidence and interpersonal skills. On a personal level, the supportive environment and
                                                                            the encouragement to explore various interests allowed me to gain clarity on my goals and
                                                                            values. MIT ADT’s emphasis on holistic development has been crucial in preparing me for
                                                                            future challenges, ensuring both career success and personal fulfillment.”</p>
                                                </div>
                                            </div>
                                        </div>
                                
                                        <!-- Student Card 2 -->
                                        <div class="col-md-6">
                                            <div class="student-card">
                                                <div class="student-photo">
                                                    <img src="{{ asset('assets_web/images/Vishwajay.png') }}" alt="Vishwajay Prashant Kadam Patil" />
                                                </div>
                                                <div class="student-info">
                                                    <h5>Vishwajay Prashant Kadam Patil</h5>
                                                    <p><strong>Program:</strong> Bachelor of Business Administration <br> (Specialization - Digital Marketing) <br> CGPA: 8.01</p>
                                                    <p class="student-quote">“It was an absolute delight to be part of a university that provided invaluable exposure to the world of
                                                                            Digital Marketing. The thoughtfully designed curriculum allowed me to delve into topics in a
                                                                            structured manner, while volunteering and leadership opportunities encouraged me to hone my
                                                                            interpersonal skills. The course covered a diverse range of subjects, from SEO and Content
                                                                            Marketing to Analytics, and my professors helped me identify my core areas of interest. Regular
                                                                            guest lectures by industry experts kept us updated with the latest trends and strategies, inspiring us
                                                                            to broaden our knowledge base. This experience has greatly enriched my foundation, equipping me
                                                                            for future pursuits in the dynamic field of Digital Marketing.”</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('Frontend/footer')

<style>
    .student-speak-section {
    margin-top: -20px;
    margin-bottom: 40px;
}

.student-card {
    display: flex;
    flex-direction: column;
    background-color: #fff0f6;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    padding: 20px;
    height: 100%;
    transition: transform 0.3s ease;
}

.student-card:hover {
    transform: translateY(-5px);
}

.student-photo img {
    width: 35%;
    height: auto;
    border-radius: 8px;
    object-fit: cover;
}

.student-info {
    padding-top: 15px;
}

.student-info h5 {
    font-weight: 700;
    color: #d63384;
    margin-bottom: 8px;
}

.student-info p {
    font-size: 15px;
    margin-bottom: 10px;
    color: #444;
}

.student-quote {
    font-style: italic;
    font-family: "Georgia", "Cursive", sans-serif;
    color: #555;
}

</style>