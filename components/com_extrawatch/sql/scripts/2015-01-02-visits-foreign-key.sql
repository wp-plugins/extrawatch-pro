	ALTER TABLE #__extrawatch_uri
				ADD FOREIGN KEY (fk)
				REFERENCES #__extrawatch(id) ON DELETE CASCADE;
