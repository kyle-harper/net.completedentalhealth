< ? p h p  
 e c h o   " h e l l o " ;  
 $ c o n = m y s q l i _ c o n n e c t ( " c o l l i n s d e n t a l c . d b . 1 0 7 3 4 4 1 3 . h o s t e d r e s o u r c e . c o m " , " c o l l i n s d e n t a l c " , " C o m p l e t e # 3 8 0 8 # " , " c o l l i n s d e n t a l c " ) ;  
 / /   C h e c k   c o n n e c t i o n  
 i f   ( m y s q l i _ c o n n e c t _ e r r n o ( ) )  
     {  
     e c h o   " F a i l e d   t o   c o n n e c t   t o   M y S Q L :   "   .   m y s q l i _ c o n n e c t _ e r r o r ( ) ;  
     }  
  
 $ s q l = " I N S E R T   I N T O   c o n t a c t s   ( t i m e s t a m p ,   f i r s t _ n a m e ,   l a s t _ n a m e ,   e m a i l ,   p h o n e ,   c o m m e n t s )  
 V A L U E S  
 ( ' $ _ P O S T [ f i r s t _ n a m e ] ' , ' $ _ P O S T [ l a s t _ n a m e ] ' , ' $ _ P O S T [ e m a i l ] ' , ' $ _ P O S T [ p h o n e ] ' , ' $ _ P O S T [ c o m m e n t s ] ' ) " ;  
  
 i f   ( ! m y s q l i _ q u e r y ( $ c o n , $ s q l ) )  
     {  
     d i e ( ' E r r o r :   '   .   m y s q l i _ e r r o r ( ) ) ;  
     }  
 e c h o   " 1   r e c o r d   a d d e d " ;  
  
 m y s q l i _ c l o s e ( $ c o n ) ;  
 ? > 