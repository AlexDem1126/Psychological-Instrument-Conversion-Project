USE pic_space;
DROP TABLE patientTBL;

CREATE TABLE patientTBL
		(
		patient_id NUMERIC(16) NOT NULL,
		username VARCHAR(40) NOT NULL,
		password VARCHAR(40) NOT NULL,
		name VARCHAR(40) NOT NULL,
		address VARCHAR(100) NOT NULL,
		city VARCHAR(30) NOT NULL,
		phone VARCHAR(14) NOT NULL,
		email VARCHAR(50) NOT NULL
		);

		
		ALTER TABLE patientTBL 
		ADD CONSTRAINT patientTBL_patient_id_pk primary key(patient_id);
		
		COMMIT;
 