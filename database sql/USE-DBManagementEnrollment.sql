CREATE DATABASE DBManagementEnrollment


GO 
USE  DBManagementEnrollment

DROP DAtaBAse DBManagementEnrollment

GO

CREATE TABLE Persons(

		ID INT, 
		LastName VARCHAR(30) NOT NULL,
        GivenName VARCHAR(20) NOT NULL,
		MiddleName VARCHAR(10) NOT NULL,
		BirthDate DATETIME NOT NULL,
		CivilStatus VARCHAR(10) NOT NULL,
		Genre VARCHAR(10) NOT NULL,
		BloodGroup VARCHAR(3) NOT NULL,
		Religion VARCHAR(15) NOT NULL,

		EnrollmentDate DATETIME2 DEFAULT 'GETDDATE'


		CONSTRAINT  PK_Persons PRIMARY KEY  (ID),

		INDEX LastGiven (LastName, GivenName),
	)

GO
    CREATE TABLE PersonType (

	ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
	ON UPDATE CASCADE
	ON DELETE CASCADE,
	CONSTRAINT  PK_PersonType PRIMARY KEY  (ID),

    PersonTypeDescription VARCHAR (10)
 )


GO


CREATE TABLE  Countries(

	CountryName VARCHAR (12),
	CountryCode VARCHAR(2) NOT NULL,
	Nationality VARCHAR(15) NOT NULL

	CONSTRAINT PK_Country PRIMARY KEY (CountryName),

    CONSTRAINT UC_CountryCode UNIQUE (CountryCode),

	INDEX Country(CountryName, CountryCode)
)

--DROP TABLE Countries


GO

CREATE TABLE Direction(

	ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
	ON UPDATE CASCADE
	ON DELETE CASCADE,
	CountryName VARCHAR(12) NOT NULL  FOREIGN KEY(CountryName) REFERENCES Countries 
	ON UPDATE CASCADE
	ON DELETE CASCADE, 
    DirectionAddress VARCHAR(120) NOT NULL,

)

GO

   CREATE TABLE  StudentAcademicHistory  (

    ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
	ON UPDATE CASCADE
	ON DELETE CASCADE,
    PreviousGrade FLOAT NOT NULL,
    LastSchoolAttended VARCHAR(20) NOT NULL,
    SchoolYear VARCHAR(12) NOT NULL,

    CONSTRAINT PK_StudAcadHis PRIMARY KEY  (ID) 
)
 GO

CREATE TABLE StudentFamily (
    ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
	ON UPDATE CASCADE
	ON DELETE CASCADE,
    Father_s_Name VARCHAR(50)  NOT NULL, 
    Mother_s_Name VARCHAR(50) Not NULL,
    Decased VARCHAR(3) DEFAULT 'YES'
    
   CONSTRAINT PK_StudFami PRIMARY KEY  (ID)
) 

GO

CREATE TABLE EducationLevel(
    EducationLevel  VARCHAR(15) PRIMARY KEY,
    EducationDescription VARCHAR(30) NOT NULL,
)

GO

CREATE TABLE Father_s_StudentAlive(

    ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
	ON UPDATE CASCADE
	ON DELETE CASCADE,
	CONSTRAINT PK_FatherStud PRIMARY KEY(ID),

    FatherDOB DATETIME NOT NULL,
    Religion VARCHAR(15) NOT NULL,
    Occupation VARCHAR(20) NOT NULL,
    MonthlyIncome MONEY NOT NULL,
    EducationLevel  VARCHAR(15) FOREIGN KEY (EducationLevel) REFERENCES EducationLevel
    ON UPDATE CASCADE
	ON DELETE CASCADE,
	CONSTRAINT Edu_FatherStud FOREIGN KEY(EducationLevel) REFERENCES EducationLevel,
    Grade FLOAT NOT NULL
)

GO

CREATE TABLE Mother_s_StudentAlive(

    ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
	ON UPDATE CASCADE
	ON DELETE CASCADE,
	CONSTRAINT PK_MotherStud PRIMARY KEY(ID),

    MotherDOB DATETIME NOT NULL,
    Religion VARCHAR(15) NOT NULL,
    Occupation VARCHAR(20) NOT NULL,
    MonthlyIncome MONEY NOT NULL,
    EducationLevel  VARCHAR(15) FOREIGN KEY (EducationLevel) REFERENCES EducationLevel
    ON UPDATE CASCADE
	ON DELETE CASCADE,
	CONSTRAINT Edu_MotherStud FOREIGN KEY(EducationLevel) REFERENCES EducationLevel,
	
    Grade FLOAT NOT NULL
)

CREATE TABLE StudentFamilyDetails(
	ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
	ON UPDATE CASCADE
	ON DELETE CASCADE,
	CONSTRAINT PK_StudFamiDet PRIMARY KEY (ID),

	NumberofBrothers INT NOT NULL,
	NumberofSisters INT NOT NULL,
	DidBrother_SisterDroppedoutofSchool VARCHAR(3) NOT NULL,

	Reason VARCHAR(50),
	FamilyMemComOrgaAffiliated VARCHAR (3) NOT NULL DEFAULT 'NO',
	OrganisationName VARCHAR (15)
)



CREATE TABLE DwellingDetails(
 	 ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
	 ON UPDATE CASCADE
	 ON DELETE CASCADE,
	 DwellingPlaceDesc  VARCHAR(20) NOT NULL,	 
	 OthersSpecify VARCHAR (20)

	 CONSTRAINT PK_StudDwelPl PRIMARY KEY (ID),
)



CREATE TABLE ToiletType(
 	 ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
	 ON UPDATE CASCADE
	 ON DELETE CASCADE,
	 ToiletTypeDescription VARCHAR(20) NOT NULL,
	 OthersSpecify VARCHAR(20),

	CONSTRAINT PK_StudToilet PRIMARY KEY(ID),
)


CREATE TABLE WaterSource(

 	 ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
	 ON UPDATE CASCADE
	 ON DELETE CASCADE,
	  WaterSourceDesc VARCHAR(30) NOT NULL,
	 OthersSpecify VARCHAR(20)

	 CONSTRAINT PK_StudWatSource PRIMARY KEY(ID),
)

CREATE TABLE ObjectsatHome(
	ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
	 ON UPDATE CASCADE
	 ON DELETE CASCADE,
	 	 SpecificObjects VARCHAR(15) NOT NULL,
	 OthersSpecify VARCHAR(30)

	 CONSTRAINT PK_ObjatHome FOREIGN  KEY(ID) REFERENCES Persons,
)

CREATE TABLE Subjects(
	SubjectName VARCHAR(12),
	SubjectCode VARCHAR(6) NOT NULL,
	SubjectDescription VARCHAR(30) NOT NULL,
	SubjectCredit INT
	

	CONSTRAINT PK_SubjName PRIMARY KEY (SubjectName),
	CONSTRAINT UC_SubjCode UNIQUE (SubjectCode),

	INDEX Index_Subject (SubjectName, SubjectCode)

)


CREATE TABLE LearningAreas(
	LearningAreaCode VARCHAR(6) NOT NULL,
	LearningAreaName VARCHAR(15) NOT NULL,
	AreaDescription VARCHAR(20)
	
	CONSTRAINT PK_LearnArea PRIMARY KEY(LearningAreaName),
	CONSTRAINT UC_AreaName  UNIQUE (LearningAreaName),

	INDEX Index_AreaName (LearningAreaName, LearningAreaCode)
)

CREATE TABLE Student_LearningAreas(
 	ID INT NOT NULL 
	CONSTRAINT FK_PersonLearn FOREIGN KEY(ID) REFERENCES Persons
	ON UPDATE CASCADE
 	ON DELETE CASCADE,
	LearningAreaName VARCHAR(15) NOT NULL,
	CONSTRAINT FK_PerAreaName FOREIGN KEY (LearningAreaName) REFERENCES LearningAreas
	ON UPDATE CASCADE
	ON DELETE CASCADE,

	SubjectName VARCHAR(12)
    CONSTRAINT FK_PerSubject FOREIGN KEY (SubjectName ) REFERENCES  Subjects 
   	ON UPDATE CASCADE
  	ON DELETE CASCADE,

	QuaterlyRating FLOAT, 
	FinalRating FLOAT,
	GeneralAverage FLOAT,
	
	Remarks VARCHAR(120)
)
--DROP TABLE Student_LearningAreas
CREATE TABLE StudentRemedialClass(
	ID INT NOT NULL 
	CONSTRAINT FK_PerRemClass FOREIGN KEY(ID) REFERENCES Persons
	ON UPDATE CASCADE
 	ON DELETE CASCADE,
	
	LearningAreaName VARCHAR(15) NOT NULL,
	CONSTRAINT FK_PerLearnRemClass FOREIGN KEY (LearningAreaName) REFERENCES LearningAreas
	ON UPDATE CASCADE
	ON DELETE CASCADE,
	ConductedFrom DATETIME2 NOT NULL DEFAULT 'GETDATE',
	ConductedTo DATETIME2 NOT NULL DEFAULT 'GETDATE',
	RemClassMark VARCHAR(15),
	RecomputedFinalGrade FLOAT,
	Remarks VARCHAR(120)
)

CREATE TABLE Regions(
	RegionNumber VARCHAR(15) DEFAULT 'REGION VII',
	RegionDescription VARCHAR(30) NOT NULL,
	CONSTRAINT PK_Region PRIMARY KEY (RegionNumber),
	INDEX IndexRegion (RegionNumber)
)

CREATE TABLE Municipalities(
    DistrictName VARCHAR(30) NOT NULL,
	CONSTRAINT PF_DistMunici FOREIGN KEY(DistrictName) REFERENCES Districts,
	MunicipalityName VARCHAR(15) NOT NULL
	INDEX Index_Municipality(DistrictName, MunicipalityName)
)

CREATE TABLE Districts(
	DistrictName VARCHAR(30) NOT NULL,
	DistrictDescription VARCHAR(30) NOT NULL
	CONSTRAINT PK_District PRIMARY KEY(DistrictName),
	INDEX IndexDistrict(DistrictName)
)

CREATE TABLE Divisions(
	DivisionName VARCHAR(20),
	DivisionDescription VARCHAR(30) NOT NULL,
	CONSTRAINT PK_Division PRIMARY KEY (DivisionName),
	INDEX IndexDivision(DivisionName)
)

CREATE TABLE SchoolInfo(
	SchoolName VARCHAR(30) NOT NULL,
	SchoolID VARCHAR(15)
	CONSTRAINT UC_SchoolID UNIQUE (SchoolID),
	SchoolAddress VARCHAR(120),
    RegionNumber VARCHAR(15) NOT NULL
	CONSTRAINT FK_RegionSchool FOREIGN KEY (RegionNumber) REFERENCES Regions
	ON DELETE CASCADE
	on UPDATE CASCADE,

	DistrictName VARCHAR(30) NOT NULL
	CONSTRAINT FK_DistrictSchool FOREIGN KEY (DistrictName) REFERENCES Districts
	ON UPDATE CASCADE
	ON DELETE CASCADE,

	DivisionName VARCHAR(20) NOT NULL
	CONSTRAINT FK_DivisionSchool FOREIGN KEY (DivisionName) REFERENCES Divisions
	ON UPDATE CASCADE
	ON DELETE CASCADE,
)
BACKUP DATABASE DBManagementEnrollment TO DISK = 'D: \D:\System Files (2)\MSIT Data\IT Data\9th Trimester\MIT61203'

 --RelativeStatus VARCHAR(15) NOT NULL,
   -- FamilyMembers INT NOT NULL
 