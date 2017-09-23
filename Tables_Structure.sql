/*

(C) Habibullah Unixian@outlook.com
	https://github.com/Habibullah-UET
    
	21/02/2017
    
Database  Tables Structure

*/

CREATE DATABASE University;
USE University;

/* Department Table */
CREATE TABLE Department(
						 Department_ID INT NOT NULL AUTO_INCREMENT,
                         Department_Name VARCHAR(5) UNIQUE,
                         PRIMARY KEY (Department_ID)
						);
                        
                        
/* Designation Table */
CREATE TABLE Designation(
						  Designation_ID INT NOT NULL AUTO_INCREMENT,
                          Designation VARCHAR(20) UNIQUE,
                          PRIMARY KEY (Designation_ID)
						);

/* Scales Table  (BPS-17, BPS-18 ...) */                        
CREATE TABLE Scale   (
						  Scale_ID INT NOT NULL AUTO_INCREMENT,
						  BPS TINYINT UNIQUE 
								check(BPS BETWEEN 1 AND 22),
                          PRIMARY KEY (Scale_ID)
					  );

CREATE TABLE Fixed   (
						  Fixed_ID INT NOT NULL AUTO_INCREMENT,
						  Fixed VARCHAR(1) UNIQUE
								check (Fixed in ('R','F','N')),
                          PRIMARY KEY (Fixed_ID)      
					  );
                      
/* Employee Table : Employee Personal Info */
CREATE TABLE Employee (
							Employee_Code INT AUTO_INCREMENT NOT NULL,
							Employee_Name VARCHAR(50),
							Father_Name VARCHAR(50),
                            
                            /* Information From Other Tables */
                            Department_ID INT,
                            Designation_ID INT,
                            Scale_ID INT,
                            Fixed_ID INT,
                            
							FOREIGN KEY (Designation_ID) REFERENCES Designation(Designation_ID),
                            FOREIGN KEY (Department_ID) REFERENCES  Department(Department_ID),
                            FOREIGN KEY (Scale_ID) REFERENCES  Scale(Scale_ID),
                            FOREIGN KEY (Fixed_ID) REFERENCES  Fixed(Fixed_ID),
                            
							Year year,
							Month  VARCHAR(3) ,							
							Department_No INT,
							Jv_Code INT,
							PRIMARY KEY (Employee_Code)
						);
                        
/* Allownace Table */
CREATE TABLE Allowance (
						  Allowance_ID INT NOT NULL AUTO_INCREMENT,
						  Basic_Pay INT DEFAULT 0,
                          Fixed_Pay INT DEFAULT 0,
                          Personal_Pay INT DEFAULT 0,
                          Hreant1_All INT DEFAULT 0,
                          Hrent_Sub_All INT DEFAULT 0,
                          Convence_All INT DEFAULT 0,
                          Adhoc_Rel FLOAT DEFAULT 0,
                          Computer_All INT DEFAULT 0,
                          Private_All INT DEFAULT 0,
                          Extra_All INT DEFAULT 0,
                          Desrnes_All FLOAT DEFAULT 0,
                          Senior_p_All INT DEFAULT 0,
                          Med_All INT DEFAULT 0,
                          ENT_All INT DEFAULT 0,
                          Dean_All INT DEFAULT 0,
                          Integrated_All INT DEFAULT 0,
                          Spec_Add_All INT DEFAULT 0,
                          Qual_All INT DEFAULT 0,
                          Teach_All INT DEFAULT 0,
                          Orderly_All INT DEFAULT 0,
                          Spec_red FLOAT DEFAULT 0,
                          Oth_All INT DEFAULT 0,
                          
                          /* Each Allowance Must be Connected to a Specefic Employee */
                          Employee_Code INT,
                          PRIMARY KEY (Allowance_ID),
                          FOREIGN KEY (Employee_Code) REFERENCES Employee(Employee_Code),
                          
                          /* Allownace depends on  BPS as well as Fixed (Regular, Fixed, By Cash)*/
							Scale_ID INT,
                            Fixed_ID INT,                         
							FOREIGN KEY (Scale_ID) REFERENCES  Scale(Scale_ID),
                            FOREIGN KEY (Fixed_ID) REFERENCES  Fixed(Fixed_ID)                           
                          
						);
                        
/* Deductions Table */                       
CREATE TABLE Deduction (
						Deduction_ID INT NOT NULL AUTO_INCREMENT,
						Hrent1_T_Ded INT DEFAULT 0,
						Hrent_O_Ded INT DEFAULT 0,
						Elect_Ded INT DEFAULT 0,
						Elec_O_Ded INT DEFAULT 0,
						Sui_Gas_Ded INT DEFAULT 0,
						Water_T_Ded INT DEFAULT 0,
						Water_O_Ded INT DEFAULT 0,
						END_Ded INT DEFAULT 0,
						B_Fund_Ded INT DEFAULT 0,
						Hb_Load_Ded INT DEFAULT 0,
						Conv_Ded INT DEFAULT 0,
						Gpf_R_Ded INT DEFAULT 0,
						Gpf_A_Ded INT DEFAULT 0,
						Eid_Advance_Ded INT DEFAULT 0,
						Ufund_O_Ded INT DEFAULT 0,
						Ufund_T_Ded INT DEFAULT 0,
						Vehicle_O_Ded INT DEFAULT 0,
						Vehicle_T_Ded INT DEFAULT 0,
						Upkeep_Ded INT DEFAULT 0,
						Recov_Gap_Conv_Ded INT DEFAULT 0,
						Tax_Ded INT DEFAULT 0,
						Gins_Ded INT DEFAULT 0,
						P_Tax INT DEFAULT 0,
						Oth_Ded INT DEFAULT 0,
                        
					/* Each Deduction Must be Connected to a Specefic Employee */
                        Employee_Code INT,
						PRIMARY KEY (Deduction_ID),
						FOREIGN KEY (Employee_Code) REFERENCES Employee(Employee_Code),

					/* Deductions depends on  BPS as well as Fixed (Regular, Fixed, By Cash)*/
							Scale_ID INT,
                            Fixed_ID INT,                         
							FOREIGN KEY (Scale_ID) REFERENCES  Scale(Scale_ID),
                            FOREIGN KEY (Fixed_ID) REFERENCES  Fixed(Fixed_ID)
                        
						);
CREATE TABLE User (
					User_ID INT NOT NULL AUTO_INCREMENT,
                    Username VARCHAR (50) UNIQUE,
                    Password VARCHAR (12),
                    PRIMARY KEY (User_ID)
					);                        