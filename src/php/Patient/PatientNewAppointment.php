<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../dist/output.css">
</head>

<body>
<main class="bg-gray-100 flex-1 pt-24">
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px] bg-white rounded-lg shadow-lg">
            <form class="p-8">
                <h2 class="text-3xl font-bold mb-8 text-center">Create New Appointment</h2>

                <div class="mb-6">
                    <label for="name" class="block text-lg font-semibold text-[#07074D] mb-2">Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Full Name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-lg font-medium text-[#6B7280] focus:outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-6">
                    <label for="phone" class="block text-lg font-semibold text-[#07074D] mb-2">Phone Number</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-lg font-medium text-[#6B7280] focus:outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-lg font-semibold text-[#07074D] mb-2">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-lg font-medium text-[#6B7280] focus:outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="flex flex-wrap -mx-2">
                    <div class="w-full sm:w-1/2 px-2 mb-6">
                        <label for="birthday" class="block text-lg font-semibold text-[#07074D] mb-2">Date</label>
                        <input type="date" name="date" id="bday" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-lg font-medium text-[#6B7280] focus:outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="w-full sm:w-1/2 px-2 mb-6">
                        <label for="department" class="block text-lg font-semibold text-[#07074D] mb-2">Department</label>
                        <select id="department" data-te-select-filter="true" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-lg font-medium text-[#6B7280] focus:outline-none focus:border-[#6A64F1] focus:shadow-md">
                            <option id="departmentvalue" value="1">General surgery</option>
                            <option id="departmentvalue" value="1">Cardiology</option>
                            <option id="departmentvalue" value="1">Pediatrics</option>
                            <option id="departmentvalue" value="1">Surgery</option>
                            <option id="departmentvalue" value="1">Emergency medicine</option>
                            <option id="departmentvalue" value="1">Physiotherapy</option>
                            <option id="departmentvalue" value="1">Ophthalmology</option>
                            <option id="departmentvalue" value="1">Oncology</option>
                            <option id="departmentvalue" value="1">Outpatient department</option>
                            <option id="departmentvalue" value="1">Radiology</option>
                            <option id="departmentvalue" value="1">Intensive care medicine</option>
                            <option id="departmentvalue" value="1">Orthopedics</option>
                            <option id="departmentvalue" value="1">Nephrology</option>
                            <option id="departmentvalue" value="1">Neurosurgery</option>
                            <option id="departmentvalue" value="1">Gastroenterology</option>
                            <option id="departmentvalue" value="1">Anesthesiology</option>
                            <option id="departmentvalue" value="1">Internal medicine</option>
                            <option id="departmentvalue" value="1">Neurology</option>
                            <option id="departmentvalue" value="1">Medicine</option>
                            <option id="departmentvalue" value="1">Urology</option>
                            <option id="departmentvalue" value="1">Pathology</option>
                            <option id="departmentvalue" value="1">Pharmacy</option>
                            <option id="departmentvalue" value="1">Obstetrics and gynaecology</option>
                            <option id="departmentvalue" value="1">Otorhinolaryngology</option>
                        </select>
                    </div>
                </div>

                <div class="mt-8">
                    <button class="w-full rounded-md bg-[#6A64F1] py-4 text-lg font-semibold text-white hover:bg-[#584EDC] transition-colors duration-300 ease-in-out">Create Appointment</button>
                </div>
            </form>
        </div>
    </div>
</main>
</body>
</html>