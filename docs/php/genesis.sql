CREATE TABLE Employees(
    Staff_id VARCHAR(30),
    Name VARCHAR(50),
    Surname VARCHAR(60),
    Department VARCHAR(50),
    Email VARCHAR(100),
    Physical_Address text,
    Phone VARCHAR(20),
    Gender VARCHAR(6),
    Position VARCHAR(60),
    Password text,

    PRIMARY KEY(Staff_id)
)
CREATE TABLE Projects(
    Project_id INT NOT NULL AUTO_INCREMENT,
    Title varchar(255),
    Description text,
    Type VARCHAR(255),

    PRIMARY KEY(Project_id)
)
CREATE TABLE Project_Files(
    File_id INT NOT NULL AUTO_INCREMENT,
    Project_id INT,
    File_name VARCHAR(255),
    File_description Text,
    File_path Text,

    PRIMARY KEY (File_id),
    FOREIGN KEY (Project_id) REFERENCES Projects (Project_id)
)
CREATE TABLE Projects_Budgets(
    Budget_id INT NOT NULL AUTO_INCREMENT,
    Project_id INT,
    Resource VARCHAR(255),
    Estimated_cost DOUBLE,
    PRIMARY KEY(Budget_id),
    FOREIGN KEY (Project_id) REFERENCES Projects (Project_id)
)
CREATE TABLE Donors(
    Donor_id INT NOT NULL AUTO_INCREMENT,
    Contact varchar(255),
    Organization varchar(255),
    Physical_Address text,
    Email varchar(255),
    Specilization varchar(255),
    Donoted varchar(10),
    Disbursement DOUBLE,

    PRIMARY KEY(Donor_id)
)
CREATE TABLE Donated(
    Item_id INT NOT NULL AUTO_INCREMENT,
    Donor_id int,
    Project varchar(255),
    Amount varchar(255),

    PRIMARY KEY(Item_id),
    FOREIGN KEY (Donor_id) REFERENCES Donors(Donor_id)
)
CREATE TABLE Beneficiary_Data(
    id INT NOT NULL AUTO_INCREMENT,
    Project_id int,
    Field varchar(255),
    Data varchar(255),

    PRIMARY KEY (id),
    FOREIGN KEY (Project_id) REFERENCES Projects (Project_id)
)
CREATE TABLE Beneficiary_Fields(
    Field_id INT NOT NULL AUTO_INCREMENT,
    Project_id INT,
    Field varchar(255),

    PRIMARY KEY(Field_id),
    FOREIGN KEY (Project_id) REFERENCES Projects (Project_id)
)
CREATE TABLE Beneficiary_Subfields(
    Subfield_id INT NOT NULL AUTO_INCREMENT,
    Field_id INT,
    Project_id INT,
    Subfield varchar(255),

    PRIMARY KEY(Subfield_id),
    FOREIGN KEY (Project_id) REFERENCES Projects (Project_id),
    FOREIGN KEY (Field_id) REFERENCES Beneficiary_Fields (Field_id)
)