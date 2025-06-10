
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
                                   Institute Programs
                                   <div class="center_head_img left_head_img"></div>
                                </div>

                                <div class="width100">

                                <div class="about_innerContent">
                                <!--Raghavendra Updated this code on 28/05/2025 at 20:42 pm-->
                                <!-- Include Bootstrap 5 CSS -->
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
                                
                                <div class="container my-2">
                                  <!--<div class="text-center mb-2">-->
                                  <!--  <h2 class="fw-bold">Undergraduate Programs</h2>-->
                                  <!--  <p class="text-muted">MIT School of Business &amp; Computer Application</p>-->
                                  <!--</div>-->
                                
                                  <div class="row g-4 justify-content-center">
                                    <!-- Program Cards -->
                                   <div class="row">
                                      <!-- MBA -->
                                      <div class="col-md-4">
                                        <div class="card border-0 shadow-lg h-100">
                                          <div class="card-body text-center">
                                            <i class="bi bi-briefcase-fill display-4 text-primary"></i>
                                            <h5 class="card-title mt-3">MBA</h5>
                                            <p class="card-text">Master of Business Administration with specializations in Marketing, Finance, HR, Operations & International Business.</p>
                                          </div>
                                        </div>
                                      </div>
                                    
                                      <!-- M.Tech -->
                                      <div class="col-md-4">
                                        <div class="card border-0 shadow-lg h-100">
                                          <div class="card-body text-center">
                                            <i class="bi bi-laptop-fill display-4 text-success"></i>
                                            <h5 class="card-title mt-3">M.Tech</h5>
                                            <p class="card-text">Master of Technology programs designed for engineering graduates with research and industry-aligned training.</p>
                                          </div>
                                        </div>
                                      </div>
                                    
                                      <!-- MCA -->
                                    <div class="col-md-4">
                                      <div class="card border-0 shadow-lg h-100">
                                        <div class="card-body text-center">
                                          <i class="bi bi-cpu-fill display-4 text-warning"></i>
                                          <h5 class="card-title mt-3">MCA</h5>
                                          <p class="card-text">Master of Computer Applications focused on software development, AI, data science, and cloud technologies.</p>
                                        </div>
                                      </div>
                                    </div>
                                    </div>

                                
                                  <!-- BBA Program Details -->
                                  <div class="accordion mt-3" id="programDetails">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="bbaHeading">
                                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#bbaDetails" aria-expanded="true" aria-controls="bbaDetails">
                                          MBA in Human Resource Management
                                        </button>
                                      </h2>
                                      <div id="bbaDetails" class="accordion-collapse collapse show" aria-labelledby="bbaHeading" data-bs-parent="#programDetails">
                                        <div class="accordion-body">
                                          <h5 class="card-title mt-1 mb-2">Program Overview</h5>
                                            <p>
                                              The MBA in Human Resource Management at MIT College of Management is a forward-thinking program meticulously designed to cultivate dynamic HR leaders equipped to meet the evolving demands of modern workplaces. Rooted in strong academic foundations and enriched with industry-focused learning, the program seamlessly blends traditional human resource principles with contemporary practices such as HR analytics, digital HR transformation, strategic talent management, and cutting-edge workforce planning.
                                            </p>
                                            <p>
                                                At MIT College of Management, we are committed to providing an immersive learning
                                                experience. Students gain invaluable exposure through real-world business scenarios,
                                                challenging internships, impactful live projects, and direct interactions with seasoned HR
                                                professionals from leading organizations. Our curriculum emphasizes both indispensable people
                                                management skills and robust data-driven decision-making, ensuring graduates are
                                                exceptionally prepared to lead in diverse, technology-enabled, and people-centric environments.
                                            </p>
                                
                                          <h5 class="card-title mt-3 mb-3">Why Choose MIT College of Management for Your MBA in HR?</h5>
                                            <ul>
                                              <li><strong>Contemporary &amp; Future-Ready Curriculum:</strong> Our syllabus is continuously updated to align with the latest global HR trends, including rapid advancements in HR technology, flexible work models, and an increasing focus on diversity, equity, and inclusion.</li>
                                              <li><strong>Specialized Focus Areas:</strong> Gain deep expertise in critical areas like HR analytics, labor laws, talent acquisition, organizational behavior, compensation &amp; benefits, and strategic workforce planning.</li>
                                              <li><strong>Strong Industry Integration:</strong> Benefit from our extensive network through mandatory industry internships, engaging workshops, and insightful HR conclaves featuring industry stalwarts.</li>
                                              <li><strong>Exceptional Placement Opportunities:</strong> Our graduates are highly sought after, securing excellent career opportunities across diverse sectors including IT, BFSI (Banking, Financial Services, and Insurance), Manufacturing, Healthcare, and Consulting.</li>
                                              <li><strong>Distinguished Faculty:</strong> Learn from accomplished faculty members with rich academic backgrounds and significant corporate leadership experience, providing both theoretical depth and practical insights.</li>
                                              <li><strong>Holistic Development:</strong> Beyond technical skills, the program focuses on shaping well-rounded HR professionals who can drive organizational growth, foster inclusive workplace cultures, and navigate the complexities of the modern business environment with ethical leadership.</li>
                                            </ul>
                                            
                                            <h5 class="card-title mt-1 mb-2">The Evolving World of HR: Your Future in Focus</h5>
                                            <p>
                                                The human resources function is undergoing a significant transformation, driven by
                                                technological advancements and shifting workforce dynamics. An MBA in HR at MIT College
                                                of Management equips you with the strategic foresight and practical skills to thrive in this new
                                                era. The program prepares you to become an integral part of digital transformation, leadership
                                                strategy, and business continuity planning within organizations.
                                            </p>

                                
                                           <h5 class="card-title mt-3">Sectoral Market Growth &amp; Demand for HR Professionals in India (2025 Outlook)</h5>
                                            <p>The Indian market, mirroring global trends, is experiencing exponential growth in key areas demanding skilled HR professionals. This translates into robust career prospects for our graduates:</p>
                                            <ol>
                                              <li><strong>Digital HR Transformation:</strong> The rapid adoption of cloud-based HRMS platforms, AI-driven recruitment tools, chatbots for employee services, and predictive people analytics is mainstreaming globally and in India. Solutions like Darwinbox, ZingHR, and SAP SuccessFactors are seeing unprecedented uptake, creating a strong demand for HR digital consultants and HR tech product managers.</li>
                                              
                                              <li><strong>Remote and Hybrid Work Models:</strong> The acceleration towards flexible work models has formalized hybrid work structures in leading Indian companies (e.g., TCS, Infosys, HCL). This necessitates HR professionals skilled in virtual employee engagement, remote performance management, and seamless digital onboarding. The demand extends to gig and flexible workforce management across sectors like e-commerce, logistics, and healthcare.</li>
                                              
                                              <li><strong>Workforce Diversity, Equity, and Inclusion (DEI):</strong> Global ESG mandates and India&#39;s increasing focus on workplace inclusivity have elevated DEI initiatives. This trend is fueling demand for specialized roles like DEI Specialists and Employee Well-being Managers, with a focus on mental health programs and inclusivity audits.</li>
                                              
                                              <li><strong>Employee Experience &amp; Well-being:</strong> A recent Deloitte India report (2024) identifies employee experience as a top HR priority, leading to significant investments in engagement platforms, mental health support, and holistic benefits programs. This creates a need for HR leaders who can champion employee well-being and align people strategies with ESG goals.</li>
                                              
                                              <li><strong>Compliance &amp; Data Governance:</strong> With India’s Digital Personal Data Protection Act (DPDP Act, 2023) coming into force, HR functions are under heightened pressure to ensure robust data security, privacy, and strict adherence to labor laws. This increases demand for HR professionals skilled in data governance and people data compliance.</li>
                                              
                                              <li><strong>Leadership &amp; Succession Planning:</strong> The complexity of modern businesses, including transitions in family-managed businesses in India and global leadership mobility, is driving a critical need for HR professionals adept at strategic leadership and succession planning.</li>
                                            </ol>
                                            
                                            <h5 class="card-title mt-3 mb-3">Key Sectors with High Demand for HR Professionals in India</h5>
                                            <ul>
                                              <li>IT &amp; ITES</li>
                                              <li>BFSI (Banking, Financial Services, and Insurance)</li>
                                              <li>Manufacturing &amp; Auto</li>
                                              <li>Healthcare &amp; Pharma</li>
                                              <li>Retail &amp; E-Commerce</li>
                                              <li>Consulting &amp; Advisory</li>
                                            </ul>
                                            
                                            <h5 class="card-title mt-3 mb-3">Employment Opportunities: Core and Emerging Job Roles</h5>
                                            <p>
                                              An MBA in HR from MIT College of Management opens doors to a diverse range of roles,
                                              moving well beyond traditional HR functions into strategic and technologically advanced positions.
                                              Graduates are prepared for impactful careers, including:
                                            </p>
                                            <ul>
                                              <li>Management Trainee – HR (with pathways to specialized roles)</li>
                                              <li>Talent Acquisition Manager</li>
                                              <li>HR Business Partner (HRBP)</li>
                                              <li>Learning &amp; Development (L&amp;D) Specialist / Manager</li>
                                              <li>Compensation &amp; Benefits Analyst</li>
                                              <li>Employee Relations Specialist</li>
                                              <li>Organizational Development (OD) Consultant</li>
                                              <li>People Analytics Specialist</li>
                                              <li>HR Tech Product Manager</li>
                                              <li>Employee Experience Manager</li>
                                              <li>Diversity &amp; Inclusion (DEI) Officer</li>
                                            </ul>
                                            
                                            <h5 class="card-title mt-3 mb-3">Intake & Duration</h5>
                                            <p><strong>Intake:</strong> 120</p>
                                            <p><strong>Duration:</strong> 2 Years</p>
                                            
                                            <h5 class="card-title mt-3">Eligibility Criteria for MBA in Human Resource Management</h5>
                                            <p>To be eligible for admission into the MBA programs offered by MIT College of Management &amp; Computer Applications (MITCOM&amp;CA), MIT ADT University, candidates must fulfill the following criteria:</p>
                                            
                                            <h6>Academic Qualification</h6>
                                            <ul>
                                              <li>Bachelor’s Degree in any discipline from a recognized university as per UGC/AICTE</li>
                                              <li>Minimum 50% aggregate marks in graduation (45% for candidates belonging to SC/ST/OBC/PWD categories)</li>
                                            </ul>
                                            
                                            <h6>Entrance Examination Requirement</h6>
                                            <p>Candidates must have appeared for any valid and Government-recognized entrance exam with a positive score, such as:</p>
                                            <ul>
                                              <li>MAH MBA CET</li>
                                              <li>CAT (Common Admission Test)</li>
                                              <li>MAT (Management Aptitude Test)</li>
                                              <li>XAT (Xavier Aptitude Test)</li>
                                              <li>ATMA (AIMS Test for Management Admissions)</li>
                                              <li>AIMA</li>
                                              <li>GMAT (Graduate Management Admission Test)</li>
                                              <li>PERA CET (Pre-Admission Entrance Test of Association of Private Universities)</li>
                                            </ul>


                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!--END-->
                                  <!--2ND ACCORDIAN START-->
                                   <div class="accordion mt-3" id="programDetails">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="bcomHeading">
                                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#bcomDetails" aria-expanded="true" aria-controls="bcomDetails">
                                         MBA in Marketing Management
                                        </button>
                                      </h2>
                                      <div id="bcomDetails" class="accordion-collapse collapse show" aria-labelledby="bcomHeading" data-bs-parent="#programDetails">
                                        <div class="accordion-body">
                                
                                            <h5 class="card-title mt-3">Program Overview:</h5>
                                            <p>Ready to lead in the fast-paced world of marketing? Our MBA in Marketing Management program is designed to equip you with the strategic thinking and analytical skills essential for thriving in today's competitive landscape. You'll master core marketing principles, including consumer behaviour, cutting-edge brand management, insightful market research, dynamic digital marketing, and impactful product strategy.</p>
                                            
                                            <p>What sets us apart? We seamlessly integrate real-world applications and illuminating case studies, ensuring you gain practical knowledge that goes beyond theory.</p>
                                            
                                            <p>Get ready for hands-on experience through immersive simulations, live industry projects, and valuable internships. This practical exposure will empower you to design and implement highly effective marketing campaigns, optimize customer engagement across diverse channels, and drive significant business growth in various industries.</p>
                                            
                                            <p>Beyond foundational knowledge, our program emphasizes data-driven decision-making, advanced marketing analytics, and the strategic use of emerging technologies like Artificial Intelligence (AI) for uncovering deep consumer insights and optimizing campaign performance.</p>
                                            
                                            <p>Graduates of our program are highly sought after and prepared to take on leadership roles in marketing, sales, advertising, brand management, and product development. With a powerful blend of academic rigor and practical exposure, an MBA in Marketing Management from [University Name] opens pathways to dynamic careers in both established corporations and innovative startups, empowering you to shape the future of marketing in a digital age.</p>
                                        
                                            <!--2-->
                                            <h5>The Dynamic Growth of India's Marketing Landscape</h5>
                                            <p>As of 2025, marketing management in India is experiencing robust growth across various sectors, driven by rapid digital transformation, technological advancements, and evolving consumer behaviors. This presents an exciting and opportune landscape for aspiring marketing professionals.</p>
                                            
                                            <h6>Sector-Specific Growth Trends:</h6>
                                            <ul>
                                              <li><strong>Digital Marketing:</strong> This sector is experiencing exponential growth, valued at approximately USD 5.15 billion in 2024 and projected to reach a staggering USD 72.1 billion by 2034, growing at an impressive CAGR of 30.2%. This surge is fueled by increased digitization, widespread social media usage, and the widespread adoption of AI technologies across all industries.</li>
                                              
                                              <li><strong>Retail Sector:</strong> Projected to reach USD 1.3 trillion in 2025, the retail sector's marketing focus is squarely on personalized marketing strategies, seamless omnichannel customer engagement, and sophisticated data-driven decision-making to capture and retain consumers in a highly competitive market.</li>
                                              
                                              <li><strong>Advertising Industry:</strong> Anticipated to grow by 7% in 2025, reaching INR 1,64,137 crore (approximately USD 19.7 billion). Digital advertising is set to dominate, accounting for over 60% of total ad spend. Significant contributions are coming from Small and Medium-sized Enterprises (SMEs), real estate, education, and technology sectors, indicating a broad-based growth.</li>
                                              
                                              <li><strong>Market Research and Analytics:</strong> Estimated at USD 3.4 billion in 2025, with customer and marketing analytics constituting 58% of the market. The widespread adoption of AI, machine learning, and big data analytics in sectors like retail, finance, and media is significantly driving this growth, enabling deeper insights and more precise targeting.</li>
                                              
                                              <li><strong>Artificial Intelligence (AI) in Marketing:</strong> The AI market specifically for marketing is projected to reach USD 8 billion by 2025. AI technologies are fundamentally transforming marketing by enhancing personalized marketing campaigns, optimizing customer experience, and providing unparalleled market intelligence, giving businesses a significant competitive edge.</li>
                                            </ul>
                                            <!--3-->
                                            <h5>Promising Employment Opportunities:</h5>
                                            <p>Every organization, regardless of its size or industry, requires skilled marketing professionals at various levels. An MBA in Marketing Management from [University Name] prepares you for a wide array of impactful roles, including:</p>
                                            <ul>
                                              <li>Marketing Executive</li>
                                              <li>Marketing Manager</li>
                                              <li>Brand Manager</li>
                                              <li>Area Sales Manager</li>
                                              <li>Zonal Sales Manager</li>
                                              <li>Chief Marketing Officer (CMO)</li>
                                              <li>Digital Marketing Specialist</li>
                                              <li>Market Research Analyst</li>
                                              <li>Content Marketing Manager</li>
                                              <li>Product Marketing Manager</li>
                                              <li>Social Media Manager</li>
                                              <li>Country Marketing Head</li>
                                              <li>Global Marketing Head</li>
                                              <li>And many more, spanning both traditional and emerging marketing domains!</li>
                                            </ul>
                                            <p><strong>Are you ready to elevate your career and become a leader in the future of marketing?</strong></p>
                                            
                                            <h5>Intake: 120<br>
                                            Duration: 2 Years</h5>
                                            
                                            <h6>Eligibility Criteria for MBA in Marketing Management</h6>
                                            <p>To be eligible for admission into the MBA programs offered by MIT College of Management &amp; Computer Applications (MITCOM&amp;CA), MIT ADT University, candidates must fulfill the following criteria:</p>
                                            
                                            <h6>Academic Qualification</h6>
                                            <ul>
                                              <li>Bachelor’s Degree in any discipline from a recognized university as per UGC/AICTE</li>
                                              <li>Minimum 50% aggregate marks are must in graduation (45% for candidates belonging to SC/ST/OBC/PWD categories)</li>
                                            </ul>
                                            
                                            <h6>Entrance Examination Requirement</h6>
                                            <p>Candidates must have appeared for any valid and Government-recognized entrance exam with a positive score, such as:</p>
                                            <ul>
                                              <li>MAH MBA CET</li>
                                              <li>CAT (Common Admission Test)</li>
                                              <li>MAT (Management Aptitude Test)</li>
                                              <li>XAT (Xavier Aptitude Test)</li>
                                              <li>ATMA (AIMS Test for Management Admissions)</li>
                                              <li>AIMA</li>
                                              <li>GMAT (Graduate Management Admission Test)</li>
                                              <li>PERA CET (Pre-Admission Entrance Test of Association of Private Universities)</li>
                                            </ul>
                                            <!--4-->


                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!--END-->
                                    <!--3RD ACCORDIAN START-->
                                   <div class="accordion mt-3" id="programDetails">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="bcaHeading">
                                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#bcaDetails" aria-expanded="true" aria-controls="bcaDetails">
                                          MBA in Finance Technology
                                        </button>
                                      </h2>
                                      <div id="bcaDetails" class="accordion-collapse collapse show" aria-labelledby="bcaHeading" data-bs-parent="#programDetails">
                                        <div class="accordion-body">
                                
                                            <h5>Program Overview:</h5>
                                            <p>The MBA in Finance Technology (Fintech) at MIT College of Management &amp; Computer Applications (MITCOM&amp;CA), a proud constituent of the prestigious MIT ADT University, is meticulously designed to equip you with a powerful and highly sought-after combination of financial expertise and cutting-edge technological proficiency. In an era where digital transformation is fundamentally reshaping the global financial landscape, this program stands at the forefront by integrating industry-driven financial practices with the latest technological innovations. We prepare our students for influential leadership roles across the rapidly evolving finance, Fintech, banking, and investment sectors globally.</p>
                                            
                                            <p>This intensive two-year, full-time program provides a robust foundation in core business and management principles, coupled with practical, hands-on training in accounting, financial analysis, and portfolio management. Crucially, you will delve deep into technology-driven financial systems and tools, gaining unparalleled exposure to groundbreaking Fintech innovations such as blockchain, Artificial Intelligence (AI) in finance, digital banking, RegTech (Regulatory Technology), and InsurTech (Insurance Technology). Our graduates are not just prepared to understand; they are ready to actively manage financial operations in both large corporations and agile start-ups, armed with critical insights into global financial markets, robust risk management strategies, and evolving compliance frameworks.</p>
                                            <!--2-->
                                            <h5>Program Highlights: Your Edge in the Fintech Revolution</h5>
                                            <ul>
                                              <li><strong>Industry-Integrated Curriculum:</strong> Our syllabus is collaboratively developed with leading industry experts, ensuring a razor-sharp focus on real-world applications and the most current market demands.</li>
                                            
                                              <li><strong>Experiential Learning:</strong> Gain invaluable practical experience through our unique Skill Bridge initiatives, mandatory internships, comprehensive live projects, and immersive Harvard Case Studies, translating theory into tangible skills.</li>
                                            
                                              <li><strong>Blended Learning Mode:</strong> Benefit from a dynamic learning environment that combines rigorous classroom instruction with insightful industry-led sessions, bringing real-world challenges and solutions directly into your education.</li>
                                            
                                              <li><strong>Fundamental &amp; Futuristic Skills:</strong> Build a strong foundation in core accounting and finance, seamlessly blended with deep dives into emerging tech tools and platforms relevant to modern finance.</li>
                                            
                                              <li><strong>Fintech Innovation Hub:</strong> Get hands-on exposure to disruptive technologies like blockchain, AI, machine learning, big data analytics, cloud finance, and advanced digital banking ecosystems.</li>
                                            
                                              <li><strong>Dedicated Placement Assistance:</strong> Leverage our extensive industry network and proactive placement cell for exceptional career opportunities in leading Fintech firms and financial institutions.</li>
                                            
                                              <li><strong>Holistic Development:</strong> Engage in a rich array of workshops, conferences, and interactive management games, supplemented by value-added courses designed to enhance your professional toolkit.</li>
                                            
                                              <li><strong>Global Communication Advantage:</strong> Enhance your global career prospects with the opportunity to learn a selective foreign language (German, Spanish, Japanese).</li>
                                            
                                              <li><strong>Practical Skill Labs:</strong> Refine your strategic thinking and practical skills through dedicated sessions in our Business Communication Lab and immersive AIMA Business Simulation learning.</li>
                                            </ul>
                                            <!--3-->
                                            <h5>Over the course of two transformative years, you will gain:</h5>
                                            <ul>
                                              <li>A solid foundation in business and management principles, essential for navigating complex organizational structures.</li>
                                              <li>Practical training in accounting, advanced financial analysis, and sophisticated portfolio management, equipping you with indispensable financial acumen.</li>
                                              <li>In-depth knowledge of technology-driven financial systems and cutting-edge tools, preparing you for the demands of the digital finance era.</li>
                                              <li>The skills to effectively manage financial operations in diverse organizational settings, from established global corporations to agile, disruptive start-ups.</li>
                                              <li>Critical insights into global financial markets, comprehensive risk management strategies, and evolving regulatory compliance frameworks.</li>
                                            </ul>
                                            <!--4-->
                                            <h5>Your Future in Finance: Unprecedented Growth &amp; Opportunities</h5>
                                            <p>The global Fintech industry is experiencing an unprecedented boom, driven by rapid technological advancements and evolving consumer demands. This exponential growth translates into immense and exciting opportunities for skilled professionals like you:</p>
                                            <ul>
                                              <li><strong>Explosive Industry Valuation:</strong> The global Fintech industry was valued at an estimated $294.74 billion in 2023. It is projected to surge at a Compound Annual Growth Rate (CAGR) of 16.5% to reach $340.10 billion in 2024, and an astounding $1.15 trillion by 2032. This robust growth signifies a sector poised for monumental expansion.</li>
                                              <li><strong>Revenue Revolution:</strong> The Fintech industry's revenue has nearly doubled from $90.5 billion in 2017 to over $180 billion by 2024, demonstrating its rapid market penetration and increasing indispensable role in the global economy.</li>
                                              <li><strong>Asia-Pacific Leading the Charge:</strong> The Asia-Pacific region is strategically positioned to spearhead global Fintech growth, with 42% of the revenue increase originating from emerging nations like China, India, and Southeast Asia. India, in particular, stands as a vibrant hub of Fintech innovation and adoption, offering a fertile ground for career growth.</li>
                                            </ul>
                                            <!--5-->
                                            <h5>Emerging Opportunities in FinTech: Where Innovation Meets Finance</h5>
                                            <ul>
                                              <li><strong>AI-Driven Banking Profits:</strong> Over the next five years, Artificial Intelligence is expected to boost global banking profits by a staggering $170 billion, potentially leading the banking sector's total profits to approach $1.992 trillion by 2028 (Source: Financial News London). This underscores the critical integration of AI within traditional finance.</li>
                                              <li><strong>India's Thriving Startup Ecosystem:</strong> India has emerged as the third-largest startup ecosystem in the world, with over 14,000 startups established in 2021–2022. Notably, approximately 6,600 of these are in the Fintech industry, signifying a dynamic and innovative landscape brimming with entrepreneurial and employment prospects for Fintech graduates.</li>
                                            </ul>
                                            <!--6-->
                                            <h5>Diverse Career Prospects: Chart Your Path in Digital Finance</h5>
                                            <p>Graduates of this program are highly sought after and exceptionally well-prepared to pursue dynamic and impactful careers across a wide spectrum of roles within the rapidly evolving financial landscape:</p>
                                            <ul>
                                              <li>Financial Technology (Fintech) Start-ups: Roles in areas like payments, digital lending, robo-advisory, InsurTech, and proptech.</li>
                                              <li>Investment Banking &amp; Corporate Finance: Specialized positions focusing on the digital transformation of financial processes and analytics.</li>
                                              <li>Financial Consulting &amp; Advisory: Expertise in guiding financial firms through technological adoption and strategic digital initiatives.</li>
                                              <li>Asset Management &amp; Wealth Planning: Leveraging AI and data analytics for sophisticated portfolio optimization and personalized client solutions.</li>
                                              <li>Business Analysis &amp; Financial Data Modelling: Creating advanced financial models and deriving insights from large datasets.</li>
                                              <li>Risk &amp; Compliance Management: Utilizing cutting-edge RegTech solutions for enhanced regulatory adherence and proactive risk mitigation.</li>
                                              <li>Digital Banking &amp; Payments Solutions: Developing and managing next-generation banking products and payment platforms.</li>
                                              <li>Blockchain &amp; Cryptocurrency Analyst: Specializing in distributed ledger technologies and digital assets.</li>
                                              <li>Cybersecurity in Finance: Protecting financial systems and data from evolving cyber threats.</li>
                                              <li>Quantitative Analyst (Quant): Applying complex mathematical and statistical models to financial data.</li>
                                              <li>Product Manager (Fintech Products): Leading the development and launch of innovative financial technology products.</li>
                                            </ul>
                                            
                                            <h5>Intake - 180</h5>
                                            <p><strong>Duration:</strong> 2 Years</p>
                                            
                                            <h5>Eligibility Criteria for MBA Programs in Finance Technology</h5>
                                            <p>To be eligible for admission into the MBA programs offered by MIT College of Management &amp; Computer Applications (MITCOM&amp;CA), MIT ADT University, candidates must fulfill the following criteria:</p>
                                            
                                            <h6>Academic Qualification</h6>
                                            <ul>
                                              <li>Bachelors Degree in any discipline from a recognized university as per UGC/AICTE</li>
                                              <li>Minimum 50% aggregate marks are must in graduation (45% for candidates belonging to SC/ST/OBC/PWD categories)</li>
                                            </ul>
                                            
                                            <h6>Entrance Examination Requirement</h6>
                                            <p>Candidates must have appeared for any valid and Government-recognized entrance exam with a positive score, such as:</p>
                                            <ul>
                                              <li>MAH MBA CET</li>
                                              <li>CAT (Common Admission Test)</li>
                                              <li>MAT (Management Aptitude Test)</li>
                                              <li>XAT (Xavier Aptitude Test)</li>
                                              <li>ATMA (AIMS Test for Management Admissions)</li>
                                              <li>AIMA</li>
                                              <li>GMAT (Graduate Management Admission Test)</li>
                                              <li>PERA CET (Pre-Admission Entrance Test of Association of Private Universities)</li>
                                            </ul>
                                            
                                            <p><strong>Note:</strong> Final-year graduation students may also apply, provided they meet the eligibility criteria at the time of admission confirmation.</p>
                                            <!--7-->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!--END-->
                                </div>
                                </div>
                                
                                <!-- Include Bootstrap Icons and JS -->
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

                                <!--End-->
                              
`


                            </div>

                        </div>

                    </div>

        </div>
    </div>
</div>

</div>
</div>

 @include('Frontend/footer')