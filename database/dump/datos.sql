insert into ale_type_scopes(description,alias,type) values('uno','uno','organizations');

insert into ale_scopes(code,description,scope_parent,type_scope_id) values('01','uno',null,1);
insert into ale_scopes(code,description,scope_parent,type_scope_id) values('02','dos',null,1);
insert into ale_scopes(code,description,scope_parent,type_scope_id) values('03','tres',null,1);
insert into ale_scopes(code,description,scope_parent,type_scope_id) values('04','cuatro',null,1);
insert into ale_scopes(code,description,scope_parent,type_scope_id) values('05','cinco',null,1);
insert into ale_scopes(code,description,scope_parent,type_scope_id) values('06','seis',null,1);
insert into ale_scopes(code,description,scope_parent,type_scope_id) values('07','siete',null,1);

insert into ale_scope_organizations(code,numorder,status,scope_code,organization_code,election_code) values('x1',1,'active','01','00000023','01');
insert into ale_scope_organizations(code,numorder,status,scope_code,organization_code,election_code) values('x2',1,'active','01','00000027','01');
insert into ale_scope_organizations(code,numorder,status,scope_code,organization_code,election_code) values('x3',1,'active','01','00000024','01');
insert into ale_scope_organizations(code,numorder,status,scope_code,organization_code,election_code) values('x4',1,'active','02','00000027','01');
insert into ale_scope_organizations(code,numorder,status,scope_code,organization_code,election_code) values('x5',1,'active','02','00000024','01');
insert into ale_scope_organizations(code,numorder,status,scope_code,organization_code,election_code) values('x6',1,'active','01','00000024','02');
insert into ale_scope_organizations(code,numorder,status,scope_code,organization_code,election_code) values('x7',1,'active','01','00000023','02');
