liste = ["Grizzli", "Python", "Aigle","Caribou", "Souris"]
def anim():
    a = int(input("Que voulez-vous faire?\n 1-Voir les animaux \n 2-voir le nombre d'animaux?\n 3- ajouter un animal \n 4-suprimer un animal \n 5-Quitté   "));
    while a != 1 and  a!=2 and a!=3 and a!=4 and a!=5:
        print("Répondez par 1,2,3,4,5");
    if a == 1:
        print(liste);
        anim();
    if a ==2:
        print(len(liste));
        anim();
    if a==3:
        print("Quelle animal veux tu ajouter?");
        liste.append(input())
        anim();
    if a == 4:
        print('Quelle animal veux tu supprimé?.');
        liste.remove(input());
        anim();
    if a == 5:
        print("Au revoir");
a = int(input("Que voulez-vous faire?\n 1-Voir les animaux \n 2-voir le nombre d'animaux?\n 3- ajouter un animal \n 4-suprimer un animal \n 5-Quitté   "));
while a != 1 and  a!=2 and a!=3 and a!=4 and a!=5:
    print("Répondez par 1,2,3,4,5");
if a == 1:
    print(liste);
    anim();
if a ==2:
    print(len(liste));
    anim();
if a==3:
    print('Quelle animal veux tu ajouter?');
    liste.append(input());
    anim();
if a == 4:
    print("Quelle animal veux tu supprimé?.");
    c = input();
    liste.remove(c);
    anim();
if a == 5:
    print("Au revoir");


        
    


    
