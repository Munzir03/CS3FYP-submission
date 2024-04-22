document.addEventListener("DOMContentLoaded", function() {
    const options = {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'X-API-Key': '215ba891f61a3e148be2e4e8f9e7624bb1902b8379de4d5925e9739e1cac6677'
        }
    };

    const roleDescriptions = {
        "owner": "As the owner, I carry the responsibility for steering the company's direction. Every decision I make shapes our future, ensuring our business grows, innovates, and remains competitive.",
        "manager": "In my role as a manager, I guide our teams towards success. I am pivotal in strategy implementation, personnel development, and achieving operational excellence.",
        "teacher": "As a teacher, I am dedicated to shaping young minds. My classroom is a place of exploration and growth, where I foster curiosity and a love for learning.",
        "director": "As a director, I set the vision and strategic direction for my department. I lead major projects and initiatives, ensuring we meet our goals with excellence.",
        "chief executive officer": "As the CEO, I oversee the entire organization, making high-level decisions that affect every aspect of the business and its culture.",
        "president": "As president, I represent our organization at the highest level. My role involves leading, inspiring, and driving forward the mission of our enterprise.",
        "project manager": "I oversee projects from inception to completion as a project manager, ensuring they run smoothly, stay on schedule, and achieve their objectives.",
        "managing director": "As a managing director, I wield considerable influence over company policies and strategies, ensuring operational effectiveness across all departments.",
        "software engineer": "As a software engineer, I develop and optimize software solutions that solve complex problems and enhance user experiences.",
        "general manager": "In the role of general manager, I oversee daily operations, manage company resources effectively, and ensure business goals are achieved.",
        "sales manager": "I drive our sales team towards achieving and exceeding targets. My role involves strategizing sales plans, motivating team members, and forging strong customer relationships.",
        "supervisor": "As a supervisor, I monitor and guide the workflow, ensuring our team's performance meets the company's standards and objectives.",
        "registered nurse": "In my capacity as a registered nurse, I provide essential care to patients, offering support and expertise in a challenging healthcare environment.",
        "accountant": "As an accountant, I manage financial records with precision, ensuring accuracy in reporting and compliance with financial regulations.",
        "assistant manager": "As an assistant manager, I support the manager in daily operations, helping to lead our team and resolve issues efficiently.",
        "business owner": "As a business owner, I juggle multiple roles, from strategy and marketing to operations and customer service, to grow my business and meet our clients' needs.",
        "founder": "As a founder, I started our company with a vision and continue to innovate and push the boundaries of what we can achieve.",
        "consultant": "I provide expert advice to clients, helping them overcome challenges and improve their business performance.",
        "engineer": "As an engineer, I apply scientific principles to design, develop, and enhance systems, products, and structures that solve practical problems.",
        "administrative assistant": "I keep our office running smoothly, managing schedules, communications, and daily administrative tasks.",
        "gerente": "As a gerente, I lead with a focus on achieving operational excellence, streamlining processes, and enhancing productivity across the board.",
        "professor": "As a professor, I contribute to academic advancement through research, teaching, and mentorship, pushing the boundaries of knowledge and fostering critical thinking among students.",
        "account manager": "In my role as an account manager, I maintain and grow relationships with our clients, ensuring they are satisfied with our services and identifying opportunities for further collaboration.",
        "sales": "As a professional in sales, I engage with customers, understand their needs, and provide solutions that meet their expectations, driving revenue and fostering brand loyalty.",
        "customer service representative": "I am the first point of contact for customers, resolving their concerns with empathy and efficiency to ensure they have a positive experience with our company.",
        "cashier": "As a cashier, I handle transactions with precision and friendliness, ensuring a smooth checkout process for every customer.",
        "self employed": "Running my own business, I wear many hats, from marketing and sales to operations and customer service, driving growth through innovation and hard work.",
        "associate": "As an associate, I support our team in various projects, contributing to the success of our initiatives through diligent work and collaborative effort.",
        "administrator": "I manage daily administrative tasks, ensuring that our operations are efficient and our documentation is accurate.",
        "operations manager": "I oversee the operations of our business, ensuring everything runs smoothly and efficiently, from logistics to production and beyond.",
        "office manager": "As an office manager, I ensure our office environment is organized, functional, and conducive to productivity for all team members.",
        "partner": "As a partner, I collaborate in managing our firm's strategic direction, leveraging my expertise to foster growth and success.",
        "sales associate": "I assist customers by providing detailed product information, helping them make informed purchases that meet their needs.",
        "vice president": "In my role as vice president, I execute strategic initiatives and contribute to leadership decisions that shape the future of our organization.",
        "business development manager": "I identify new business opportunities, develop relationships with potential partners and clients, and drive strategic initiatives to expand our market presence.",
        "senior software engineer": "As a senior software engineer, I lead development teams, design complex systems, and ensure the reliability and scalability of our software solutions.",
        "graphic designer": "I create visual concepts that captivate and communicate, using design to enhance our brand's message across various media.",
        "co-founder": "As a co-founder, I have been instrumental in shaping the vision, strategy, and culture of our company from its inception.",
        "auxiliar administrativo": "I support our administrative team, handling essential tasks that keep our office operations running smoothly.",
        "sales representative": "I reach out to potential clients, present our products, and negotiate deals that benefit both our customers and our company.",
        "vendedor": "As a vendedor, I engage directly with customers, selling products and ensuring they receive high-quality service and satisfaction.",
        "assistant": "I assist with daily tasks, supporting our team in achieving its objectives by managing schedules and handling administrative duties.",
        "driver": "As a driver, I ensure the safe and timely transport of goods and passengers, representing our company on the road.",
        "technician": "I troubleshoot, repair, and maintain equipment, ensuring everything operates at peak efficiency.",
        "assistant professor": "As an assistant professor, I teach, conduct research, and publish scholarly work, contributing to the academic community while guiding students.",
        "docente": "I educate and inspire students, providing them with the knowledge and tools they need to succeed in their academic and future careers.",
        "marketing manager": "I develop and oversee marketing strategies that effectively promote our products and enhance our market share.",
        "account executive": "I manage client accounts, develop strategic approaches, and ensure that we meet our clients' needs and expectations consistently.",
        "sales executive": "I lead sales strategies and initiatives, focusing on achieving sales targets and expanding our business reach.",
        "lecturer": "I engage with students in a higher education setting, delivering lectures, developing curriculum, and fostering a conducive learning environment.",
        "assistente administrativo": "I perform administrative duties, helping to organize, schedule, and maintain the efficiency of our office operations.",
        "software developer": "I write, debug, and maintain software code, working on projects that range from small updates to major system overhauls.",
        "human resources manager": "I oversee the HR department, ensuring that recruitment, staff development, and employee relations are managed effectively.",
        "secretary": "I handle communications, organize records, and provide critical support that enables our executives to work efficiently.",
        "executive director": "I lead our organization, setting strategic goals and ensuring we meet our objectives through effective management and leadership.",
        "store manager": "I manage store operations, oversee employees, and ensure customer satisfaction in our retail location.",
        "realtor": "I assist clients in buying, selling, and renting properties, providing expert advice and negotiating the best deals."
        // Continue listing additional roles and their descriptions
  
       
    };
    
    
    

    fetch('https://api.peopledatalabs.com/v5/autocomplete?field=title&size=100&pretty=false', options)
        .then(response => response.json())
        .then(data => {
            const autoCompleteJS = new autoComplete({
                data: {
                    src: data.data.map(item => item.name.toLowerCase()),
                    cache: true,
                },
                resultsList: {
                    element: (list, data) => {
                        if (!data.results.length) {
                            const message = document.createElement("div");
                            message.setAttribute("class", "no_result");
                            message.innerHTML = `<span>Found No Results for "${data.query}"</span>`;
                            list.prepend(message);
                        }
                    },
                    noResults: true,
                },
                resultItem: {
                    highlight: true,
                },
                events: {
                    input: {
                        selection: (event) => {
                            const selectedRole = event.detail.selection.value.trim().toLowerCase();
                            console.log("Selected Role:", selectedRole);
                            const selectedDescription = roleDescriptions[selectedRole];
                            if (selectedDescription) {
                                document.getElementById("experience").value = selectedDescription;
                                document.getElementById("autoComplete").value = selectedRole;
                            } else {
                                document.getElementById("autoComplete").value = selectedRole;
                                console.error("Description not found for the selected role.", selectedRole);
                            }
                        }
                    }
                }
            });
        })
        .catch(err => console.error(err));
});


window.addWorkExperience = function() {
    console.log("addWorkExperience function called"); // Add this line
    var company = document.getElementById("company").value;
    var dateFrom = document.getElementById("datefrom").value;
    var dateTo = document.getElementById("dateto").value;
    var role = document.getElementById("autoComplete").value;
    var experience = document.getElementById("experience").value;
    var selected_work_experience = document.getElementById("selected_work_experience");

    if (company && dateFrom && dateTo && role && experience) {
        // Concatenate the work experience details in a structured format
        var workExperienceDetails = "\nCompany: " + company +
                                   "\nDate From: " + dateFrom +
                                   "\nDate To: " + dateTo +
                                   "\n + Role: " + role +
                                   "\nExperience: " + experience +
                                   "\n\n"; // Add extra newline for separation

        // Append the work experience details to selected_work_experience
        selected_work_experience.value += workExperienceDetails;

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "experience.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Assuming the server response contains a success message
                alert(xhr.responseText);
            }
        };
        xhr.send("company=" + encodeURIComponent(company) + "&datefrom=" + encodeURIComponent(dateFrom) + "&dateto=" + encodeURIComponent(dateTo) + "&role=" + encodeURIComponent(role) + "&experience=" + encodeURIComponent(experience));
    } else {
        alert("Please fill in all fields.");
    } 
};





function addHobby() {
    console.log("Hobby function called");
    var hobbies = document.getElementById("hobbies").value;
    var selectedHobbies = document.getElementById("selected-hobbies");

    if (hobbies) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "hobbies.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                selectedHobbies.value += hobbies + ', '; // Append the skill
                document.getElementById("hobbies").value = ''; // Clear the input
                alert("Hobby added successfully");
            }
        };
        xhr.send("hobbies=" + encodeURIComponent(hobbies));
    } else {
        alert("Please fill in the hobby field.");
    }
}


function addReference() {
    console.log("Reference function called");
    var references = document.getElementById("references").value;
    var selectedReference = document.getElementById("selected-reference");

    if (references) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "references.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                selectedReference.value += references + ', '; // Append the skill
                document.getElementById("references").value = ''; // Clear the input
                alert("Referee added successfully");
            }
        };
        xhr.send("references=" + encodeURIComponent(references));
    } else {
        alert("Please fill in the Reference field.");
    }
}

function addSkill() {
    console.log("Skill function called");
    var skills = document.getElementById("skills").value;
    var selectedSkills = document.getElementById("selected-skills");

    if (skills) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "skills.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                selectedSkills.value += skills + ', '; // Append the skill
                document.getElementById("skills").value = ''; // Clear the input
                alert("Skill added successfully");
            }
        };
        xhr.send("skills=" + encodeURIComponent(skills));
    } else {
        alert("Please fill in the skill field.");
    }
}





window.addQualification = function() {
    console.log("addQualification function called");
    var university = document.getElementById("university").value;
    var qualification = document.getElementById("qualification").value;
    var grade = document.getElementById("grade").value;

    if (university && qualification && grade) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "qualifications.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Assuming the server response contains a success message
                alert(xhr.responseText);
            }
        };
        xhr.send("university=" + encodeURIComponent(university) + "&qualification=" + encodeURIComponent(qualification) + "&grade=" + encodeURIComponent(grade));
    } else {
        alert("Please fill in all fields.");
    }
};
