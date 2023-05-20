<!DOCTYPE html>
<html lang="en">

<head>
<title>Cognito School</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="../..//css/java_programming.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<script src="https://apis.google.com/js/platform.js"></script>

</head>
 
<body style="background:url('img/feedback_background.jpg' );">    
<div class="container-fluid">
    <div class="col-sm-12">
        <div class="row mt-4">
            <a href="" class="h3" style="font-family:algerian;text-decoration: none;text-align: center;"><i><b>CARRIER GUIDANCE</i></b></a>
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                
                <form>
                    <div class="mt-2">  
                        <label  id="l1" class="form-label"><b>Select your graduation degree:</b></label>
                        <select name=degree id="yash-select" class="form-select">
                            <option value="default"><b>PLEASE SELECT ME</b></option>
                        </select>
                    </div>
                    <button type="submit" onclick="openform2()" id="yash-sb" class="btn btn-primary mt-2"><b>Submit</b></button>
                </form>
                
                <form style="display: none;" class="mt-2" id="yash-form2">
                    <div class="mb-3">                            
                        <label id="l2" class="form-label"><b>Choose your field which you have done yet : </b></label>
                        <select  id="yash-degreename" class="form-select">
                            <option value="default">PLEASE SELECT ME</option>
                        </select>
                    </div>    
                    <button class="btn btn-primary" type="submit" onclick="openform3()" id="yash-sb1"><b>Submit</b></button>
                    </form>
    
                <form style="display: none;" class="mt-2" id="yash-form3">
                    <div class="mb-3">
                        <label class="form-label"><b>Choose Your Specilization : </b></label>
                        <select  id="yash-degreefield" class="form-select">
                           <option value="default">PLEASE SELECT ME</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" id="yash-sb2" onclick="result()"><b>Submit</b></button>
                    </form>
                    <ul id="yash-unlist" class="mt-3" style="font-weight:bold;font-size:20px;"></ul>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</div>

</body>





<script>
    let form1 = ["0. btech", "1. bsc" , "2. bcom", "3. BA", "4. LLB", "5. bba", "6. BED","7. MBA"];
// degree name
let form2 =
[
    ["0. Computer Science Engineering","1. Electronics and communications Engineering","2. Mechanical Engineering","3. Civil Engineering","4. Electrical Engineering","5. Chemical Engineering","6. Marine Engineering","7. Aerospace Engineering"],
    ["0. Biology","1. Chemistry","2. Physics","3. Mathematics","4. Neuroscience"],
    ["0. Accounting","1. Finance","2. Marketing","3. Human Resource Management","4. International Business"],
    ["0. English Language and Literature","1. History","2. Political Science","3. Sociology","4. Psychology"],
    ["0. Constitutional Law","1. Criminal Law","2. Corporate Law"],
    ["0. Marketing","1.Finance","2. Human Resource Management"],
    ["0. Elementary Education","1. Secondary Education","2. Physical Education"],
    ["0. Operations Management","1. Entrepreneurship","2. International Business"]
]
let form3 = 
[
    [
        ["0. Full Stack Deveplopment","1. Cloud Computing","2. ML and A.I.","3. Data Science","4. UI and UX","5. Cyber Security"],
        ["0. Electronics Design and Circuit Engineering","1. Communication Engineering","2. Digital Signal Processing (DSP)","3. Embedded Systems Engineering","4. VLSI Design and Semiconductor Engineering",],
        ["0. Mechanical Design Engineering","1. Thermal Engineering","2. Manufacturing Engineering","3. Robotics and Automation","4. Automotive Engineering"],
        ["0. Structural Engineering","1. Geotechnical Engineering","2. Transportation Engineering","3. Water Resources Engineering"],
        ["0. Power Systems Engineering","1. Electronics Engineering","2. Control Systems Engineering","3. Telecommunications Engineering"],
        ["0. Process Engineering","1. Petrochemical Engineering","2. Environmental Engineering","3. Bioprocess Engineering"],
        ["0. Naval Architecture and Ship Design","1. Marine Propulsion and Power Systems","2. Marine Hydrodynamics and Ocean Engineering","3. Marine Materials and Corrosion Engineering"],
        ["0. Aerodynamics and Fluid Mechanics","1. Propulsion","2. Structures and Materials","3. Avionics and Control Systems"]
    ],
    [
        ["0. Molecular Biology","1. Ecology and Environmental Biology","2. Microbiology","3. Genetics"],
        ["0. Analytical Chemistry","1. Organic Chemistry","2. Inorganic Chemistry","3. Physical Chemistry"],
        ["0. Astrophysics","1. Quantum Physics","2. Condensed Matter Physics","3. Particle Physics"],
        ["0. Pure Mathematics","1. Applied Mathematics","2. Statistics","3. Computational Mathematics"],
        ["0. Cognitive Neuroscience","1. Behavioral Neuroscience","2. Cellular and Molecular Neuroscience","3. Clinical Neuroscience"],
    ],
    [
        ["0. Financial Accounting","1. Managerial Accounting","2. Forensic Accounting","3. Auditing"],
        ["0. Corporate Finance","1. Investment Management","2. Financial Markets","3. Risk Management and Insurance"],
        ["0. Brand Management","1. Digital Marketing","2. Advertising and Promotion","3. Market Research and Analytics"],
        ["0. HR Generalist","1. Recruitment and Talent Acquisition","2. Training and Development","3. Compensation and Benefits"],
        ["0. International Trade Specialist","1. Global Market Research Analyst","2. International Business Development","3. Global Supply Chain Management"],
    ],
    [
        ["0. Literary Studies","1. Creative Writing","2. Linguistics","3. Comparative Literature"],
        ["0. Cultural History","1. Political History","2. Social History","3. Economic History"],
        ["0. Comparative Politics","1. International Relations","2. Political Theory","3. Public Administration"],
        ["0. Social Research","1. Social Policy and Advocacy","2. Criminology","3. Gender and Sexuality Studies"],
        ["0. Clinical Psychology","1. Cognitive Psychology","2. Developmental Psychology","3. Social Psychology"],
    ],
    [
        ["0. Comparative Constitutional Law:","1. Constitutional Theory","2. Constitutional History"],
        ["0. Criminal Litigation","1. White-Collar Crime", "2. Criminal Justice Policy"],
        ["0. Corporate Finance","1. Corporate Governance", " 3. Securities Law"]
    ],
    [
        ["0. Digital Marketing","1. Brand Management","2. Market Research"],
        ["0. Corporate Finance","1. Investment Management","2. Financial Markets and Institutions"],
        ["0. Principles of Human Resource Management","1. Performance Management","2. Organizational Behavior"]
    ],
    [
        ["0. Child Development and Psychology","1. Pedagogy of Elementary Education","2. Curriculum Design and Development"],
        ["0. Adolescent Psychology and Development","1. Pedagogy of Secondary Education","2. Educational Technology in Secondary Education"],
        ["0. Sports Science and Exercise Physiology","1. Curriculum and Instruction in Physical Education","2. Fitness and Wellness Education"]
    ],
    [
        ["0. Supply Chain Management","1. Operations Strategy","2. Project Management"],
        ["0. Entrepreneurial Finance","1. Marketing for Entrepreneurs","2. Entrepreneurial Leadership"],
        ["0. Global Strategy","1. International Marketing","2. Global Operations and Supply Chain Management"]
    ]
]
let ans = 
[
    [
        [
            ["Full Stack Web Developer","Front-End Software Engineer","Back-End Software Engineer"],
            ["Cloud Developer","Cloud Architect","DevOps Engineer"],
            ["AI/ML Specialists","Machine Learning Engineers","AI/ML Architects"],
            ["Data Scientist","Data Analyst","Data Engineer"],
            ["User Experience Designer","User Interface Designer","UX/UI Developer"],
            ["Cyber Forensics Solutions architect","Cyber Security architect","Network security analyst"],
        ],
        [
            ["Electronics Design Engineer","Circuit Designer","Hardware Engineer"],
            ["Communications Engineer","Wireless Network Engineer","Telecommunications Engineer"],
            ["DSP Engineer","Signal Processing Engineerv","Audio/Video Processing Engineer"],
            ["Embedded Systems Engineer","Firmware Engineer","Microcontroller Engineer"],
            ["VLSI Design Engineer","Semiconductor Engineer","IC Design Engineer"]
        ],
        [
            ["Mechanical Design Engineer","Product Development Engineer","CAD Engineer"],
            ["Thermal Engineer","HVAC Engineer","Energy Systems Engineer"],
            ["Manufacturing Engineer","Process Engineer","Production Engineer"],
            ["Robotics Engineer","Automation Engineer","Controls Engineer"],
            ["Automotive Engineer","Vehicle Dynamics Engineer","Powertrain Engineer"]
            
        ],
        [
            ["Structural Engineer","Bridge Engineer","Structural Analyst"],
            ["Geotechnical Engineer","Foundation Engineer","Soil Engineer"],
            ["Transportation Engineer","Highway Engineer","Traffic Enginee"],
            ["Water Resources Engineer","Hydraulic Engineer","Water Treatment Engineer"],
        ],
        [
            ["Power Systems Engineer","Power Distribution Engineer","Power Electronics Engineer"],
            ["Electronics Design Engineer","Analog or Digital Circuit Designer","Embedded Systems Engineer"],
            ["Control Systems Engineer","Automation Engineer","Robotics Engineer"],
            ["Telecommunications Engineer","Network Engineer","Wireless Communication Engineer"],
            
        ],
        [
            ["Process Engineer","Plant Engineer","Process Design Engineer"],
            ["Petrochemical Engineer","Refinery Engineer","Petrochemical Researcher"],
            ["Environmental Engineer","Waste Management Engineer","Air Quality Engineer"],
            ["Bioprocess Engineer","Biotechnology Engineer","Fermentation Engineer"]
        ],
        [
            ["Naval Architect","Ship Designer","Marine Structural Engineer"],
            ["Marine Propulsion Engineer","Power Systems Engineer","Marine Engine Designer"],
            ["Hydrodynamic Engineer","Offshore Structures Engineer","Marine CFD Specialist"],
            ["Marine Materials Engineer","Corrosion Engineer","Material Selection Engineer"]
        ],
        [
            ["Aerodynamicist","Wind Tunnel Engineer","Flight Test Engineer"],
            ["Propulsion Engineer","Rocket Engineer","Gas Turbine Engineer"],
            ["Structural Engineer","Materials Engineer","Failure Analysis Engineer"],
            ["Avionics Engineer","Control Systems Engineer","Navigation Systems Engineer"]
        ]
    ],
    [
        [
            ["Research Scientist","Laboratory Technician","Biotechnologist"],
            ["Environmental Consultant","Conservation Scientist","Wildlife Biologist"],
            ["Microbiologist","Medical Laboratory Technologist","Quality Control Analyst"],
            ["Genetic Counselor","Genetic Researcher","Biotechnology Scientist"]
        ],
        [
            ["Analytical Chemist","Quality Control Analyst","Forensic Scientist"],
            ["Synthetic Chemist","Medicinal Chemist","Process Development Chemist"],
            ["Inorganic Chemist","Materials Scientist","Catalysis Researcher"],
            ["Physical Chemist","Computational Chemist","Spectroscopist"]
        ],
        [
            ["Astrophysicist","Research Scientist","Research Scientist"],
            ["Quantum Physicist","Quantum Computing Researcher","Photonics Engineer"],
            ["Materials Scientist","Semiconductor Engineer","Device Physicist"],
            ["Particle Physicist","High-Energy Researcher","Particle Accelerator Operator"]
        ],
        [
            ["Mathematician","Researcher","Cryptographer"],
            ["Quantitative Analyst","Operations Research Analyst","Financial Analyst"],
            ["Statistician","Data Analyst","Market Research Analyst"],
            ["Numerical Analyst","Computational Scientist","Simulation Analyst"]
        ],
        [
            ["Research Scientist","Neuropsychologist","Cognitive Rehabilitation Specialist"],
            ["Research Scientist","Neuropsychopharmacologist","Animal Behavior Researcher"],
            ["Neurobiologist","Laboratory Technician","Pharmaceutical Research Associate"],
            ["Clinical Research Coordinator","Neurology Technician","Clinical Trial Associate"]
        ],
    ],
    [
        [
            ["Financial Accountant","Auditor","Tax Consultant"],
            ["Cost Accountant","Budget Analyst","Financial Controller"],
            ["Forensic Accountant","Fraud Investigator","Litigation Consultant"],
            ["Internal Auditor","External Auditor","Audit Manager"]
        ],
        [
            ["Financial Analyst","Financial Planner","Treasury Analyst"],
            ["Investment Analyst","Portfolio Manager","Wealth Manager"],
            ["Financial Trader","Stockbroker","Financial Market Analyst"],
            ["Risk Analyst","Insurance Underwriter","Claims Manager"]
        ],
        [
            ["Brand Manager","Marketing Manager","Product Manager"],
            ["Digital Marketing Specialist","Social Media Manager","SEO Specialist"],
            ["Advertising Account Executive","Creative Director","Media Planner"],
            ["Market Research Analyst","Marketing Analyst","Data Analyst"]
        ],
        [
            ["HR Manager","HR Business Partner","HR Consultant"],
            ["Talent Acquisition Specialist","Recruitment Coordinator","HR Recruiter"],
            ["Training Specialist","Learning and Development Coordinator","Training Manager"],
            ["Compensation Analyst","Benefits Administrator","Total Rewards Specialist"]
        ],
        [
            ["Import/Export Coordinator","International Trade Analyst","Customs Compliance Specialist"],
            ["Market Research Analyst","International Marketing Researcher","Competitive Intelligence Analyst"],
            ["Business Development Manager","Market Entry Strategist","International Sales Manager"],
            ["Supply Chain Analyst","Logistics Coordinator","International Procurement Specialist"]
        ],
    ],
    [
        [
            ["Writer/Author","Editor","Literary Critic"],
            ["Creative Writer","Copywriter","Content Writer"],
            ["Linguist","Language Analyst","Speech Pathologist"],
            ["Cultural Analyst","Translator","Publishing Professional"]
        ],

        [
            ["Museum Curator","Archivist","Heritage Manager"],
            ["Government Analyst","Policy Researcher","Political Campaign Staff"],
            ["Community Outreach Coordinator","Social Researcher","Nonprofit Program Manager"],
            ["Economic Analyst","Research Economist","Business Consultant"]
        ],

        [
            ["Political Analyst","Researcher","Policy Advisor"],
            ["Diplomat","Foreign Service Officer","International Development Specialist"],
            ["Political Philosopher","Policy Analyst","Think Tank Researcher"],
            ["Public Administrator","Policy Analyst","Government Consultant"]
        ],

        [
            ["Research Analyst","Data Analyst","Market Researcher"],
            ["Policy Analyst","Social Worker","Community Organizer"],
            ["Crime Analyst","Probation Officer","Corrections Officer"],
            ["Gender Equality Officer","LGBTQ+ Advocate","Gender Analyst"]
        ],

        [
            ["Mental Health Counselor","Case Manager","Behavioral Therapist"],
            ["User Experience (UX) Researcher","Human Factors Specialist","Cognitive Rehabilitation Therapist"],
            ["Child Life Specialist","Early Childhood Educator","Family Support Worker"],
            ["Social Services Coordinator","Community Outreach Specialist","Market Research Analyst"]
        ]
    ],
    
    [
            [
                ["Constitutional Lawyer","Government Legal Advisor","Legal Researcher and Policy Analyst"],
                ["Public Policy Analyst","Constitutional Law Advocate","Legal Advisor for International Organizations"],
                ["Constitutional Law Consultant","Archivist or Curator","Legal Historian"]
            ],

            [
                ["Criminal Defense Attorney","Prosecuting Attorney","Legal Consultant for Criminal Cases"],
                ["White-Collar Crime Investigator","Compliance Officer","Fraud Analyst"],
                ["Policy Analyst","Researcher in Criminal Justice","Criminal Justice Program Coordinator"]
            ],

            [
                ["Financial Analyst","Investment Banker","Corporate Financial Manager"],
                ["Corporate Governance Consultant","Compliance Manager","Corporate Secretary"],
                ["Securities Lawyer","Compliance Officer in Securities Industry","Securities Analyst"]
            ]
    
        ],
        [
            [
                ["Digital Marketing Specialist","Social Media Manager","SEO Specialist"],
                ["Brand Manager","Marketing Manager","Product Manager"],
                ["Market Research Analyst","Market Research Manager","Data Analyst"]
            ],

            [
                ["Financial Analyst","Investment Banker","Financial Manager"],
                ["Portfolio Manager","Investment Analyst","Asset Manager"],
                ["Financial Analyst","Risk Analyst","Trading Analyst"]
            ],

            [
                ["Human Resources Generalist","HR Assistant","Recruitment Specialist"],
                ["Performance Management Specialist","Talent Management Specialist","HR Business Partner"],
                ["Organizational Development Specialist","HR Business Partner","Leadership Development Manager"]
            ]
    
        ],
        [
            [
               ["Child Psychologist","Early Childhood Educator","Child Development Specialist"],
               ["Elementary School Teacher","Education Program Coordinator","Education Consultant"],
               ["Curriculum Specialist","Instructional Designer","Education Researcher"]
            ],

            [
                ["Adolescent Counselor","School Psychologist","Youth Program Coordinator"],
                ["Secondary School Teacher","Education Administrator for Secondary Schools","Educational Counselor"],
                ["Educational Technology Specialist","e-Learning Developer","Instructional Technologist"]
    
            ],

            [
                ["Sports Scientist","Exercise Physiologist","Fitness and Wellness Coordinator"],
                ["Physical Education Teacher","Physical Education Program Coordinator","Athletic Director"],
                ["Wellness Coach","Corporate Wellness Manager","Personal Trainer"]
            ]
    
        ],
        [
        
            [
                ["Supply Chain Analyst","Logistics Coordinator","Procurement Manager"],
                ["Operations Manager","Business Process Analyst","Operations Consultant"],
                ["Project Manager","Program Manager","Project Coordinator"]
            ],
            [
                ["Financial Analyst for Startups","Venture Capitalist","Financial Consultant for Entrepreneurs"],
                ["Startup Marketing Manager","Digital Marketing Specialist for Startups","Brand Manager for Startups"],
                ["Startup Founder","Business Development Manager","Innovation Manager"]
                
            ],
            [
                ["Global Strategy Consultant","International Business Development Manager","Market Entry Specialist"],
                ["International Marketing Manager","Export Manager","Global Brand Manager"],
                ["Global Supply Chain Manager","International Operations Manager","Logistics Director"]
                   
            ]
        ]
    
]

let row_2;
let row_3;
let row_4;
document.getElementById("yash-sb").addEventListener("click",(event)=>{
    event.preventDefault()
})
document.getElementById("yash-sb1").addEventListener("click",(event)=>{
    event.preventDefault()
})
document.getElementById("yash-sb2").addEventListener("click",(event)=>{
    event.preventDefault()
})
let select = document.getElementById("yash-select"),form = form1;
for(let i=0 ; i<form.length; i++)
{
    let option = document.createElement("option"),
        txt = document.createTextNode(form[i]);
    option.appendChild(txt);
    option.setAttribute("value",form[i])
    select.insertBefore(option,select.lastChild)
}

function openform2()
{
    let degree = document.getElementById("yash-select").value;
    if(degree!="default")
    {
    document.getElementById("yash-select").setAttribute("disabled",true)
    document.getElementById("yash-sb").setAttribute("disabled",true)
    document.getElementById("l1").style.color="#918d8d"
    row_2 = Number(degree[0])
    console.log(row_2)
    let f2 = document.getElementById("yash-form2");
    f2.style.display = "block";
    let select = document.getElementById("yash-degreename"),arr = form2[row_2];
    for(let i=0; i<arr.length;i++)
    {
        let option1 = document.createElement("option"),
        txt1 = document.createTextNode(arr[i]);
    option1.appendChild(txt1);
    option1.setAttribute("value",arr[i])
    select.insertBefore(option1,select.lastChild)
    }   
    }else{
        window.alert("select correct value")
    }
}

function openform3()
{
    let f3 = document.getElementById("yash-form3");
    let fieldname = document.getElementById("yash-degreename").value;
    if(fieldname!="default")
    {
    document.getElementById("yash-degreename").setAttribute("disabled",true)
    document.getElementById("yash-sb1").setAttribute("disabled",true)
    document.getElementById("l2").style.color="#918d8d"  
    f3.style.display = "block";   
    row_3 = Number(fieldname[0])
    let select = document.getElementById("yash-degreefield"),arr = form3[row_2][row_3];
    for(let i=0; i<arr.length;i++)
    {
        let option1 = document.createElement("option"),
        txt1 = document.createTextNode(arr[i]);
    option1.appendChild(txt1);
    option1.setAttribute("value",arr[i])
    select.insertBefore(option1,select.lastChild)
    }
    }else{
        window.alert("Select correct value")
    }
}

function result()
{
    let unlist = document.getElementById("yash-unlist")
    while (unlist.hasChildNodes()) {
        unlist.removeChild(unlist.firstChild);
      }
    let degreefield = document.getElementById("yash-degreefield").value;
    console.log(degreefield)
    if(degreefield=="default")
    {
        window.alert("select right value")
    }
    else{
    row_4 = Number(degreefield[0])
    let arr = ans[row_2][row_3][row_4];
    for(let i=0; i<arr.length;i++)
    {
        let lt = document.createElement("li")
        lt.innerHTML=arr[i];
        unlist.appendChild(lt)
    }
    }
}
</script>
</html>