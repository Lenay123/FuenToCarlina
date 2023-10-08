<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/resident.css">
    <link rel="icon" href="../img/image (5).png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/515e3f1675.js" crossorigin="anonymous"></script>
    <title>Request FORM</title>
</head>
<body>
    <section id="forModal">
        <div id="myModal1" class="modal">
            <div class="modal-content">
              <div class="modal-header">
                <h2 class="modal-title">CONFIRMATION MODAL</h2>
                <span class="close" onclick="closeModal1()">&times;</span>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="name">Notice:</label>
                  <div class="description">Hello {{auth()->user()->first_name}}! You are requesting a Barangay Nabunturan Document!</div>
                </div>
                
                <form action="">
                <div class="form-group">
                  <div class="form-group">
                    <label for="service" required> </label>
                    <textarea id="service" name="service">{{$service->name}}</textarea>
                    <div class="description">I certify that all information on this form are true and correct. I understand that any incorrect, false or misleading statement is punishable by law.</div>
                  </div>
    
                    <label for="ID" required>Type of ID:</label>
                    <select id="ID" name="ID">
                      <option value="">Select an ID</option>
                      <option value="NSO with School ID">NSO with School ID</option>
                      <option value="NBI CLearance">NBI Clearance</option>
                      <option value="Voter's ID">Voter's ID</option>
                      <option value="Driver's Licensw">Driver's License</option>
                      <option value="Voter's Certificate">Voter's Certificate</option>
                      <option value="National ID">National ID</option>
                      <option value="SSS">SSS</option>
                    </select>
                    <div class="description">Note: Bring this document for verification</div>
                  </div>
                <div class="form-group">
                  <label for="message" required>ID Number:</label>
                  <textarea id="message" name="message" placeholder="Enter ID Number"></textarea>
                  <div class="description">I certify that all information on this form are true and correct. I understand that any incorrect, false or misleading statement is punishable by law.</div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal1()">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="openModalProceed()">I Agree</button>
              </div>
            </form>
              <!-- Modal for Proceed -->
              
            </div>
          </div>
</body>
</html>