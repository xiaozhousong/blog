Role and permission: 
Superadministrator can –
CRUD users (protect from middleware)
CRUD posts (protect from middleware)

Administrator can –
CURD posts (protect from middleware)

User can –
CR posts (protect from middleware)
Set permission with @permission('update-post') and @permission('delete-post') to unallowed user to update and delete the posts. However the edit-post is only protect through middleware by login, if a user copy the URL link of edit-post (after user login), the user still can edited the post. 

Solution about user, role and permission:
Use Laratrust - http://laratrust.readthedocs.io/en/4.0/
I have use Laratrust to solve the relationship between users, roles, and permissions. 
Between:
Users – Roles is many to many relationship.
Permission – Roles is many to many relationship.
Users – Roles is many to many relationship.
User – Post is one to many relationship.
(Please see graphic image in the folder, called relationship.png)

I haven’t really concentrated on CSS due to short time to complete, but I have done a mobile app that is more concentrated on CSS.

https://github.com/xiaozhousong/myapp_cityguide
https://xiaozhousong.github.io/myapp_cityguide/dist/

I appreciate your consideration and look forward to hearing from you soon.

Kind Regards
Xiaozhou Song
