import java.util.Scanner;
import java.util.Random;
public class eleve{
    int age;
    int motivation = 100;
    int progression = 0;
    String prenom;
    String nom;
    String sexe;
    String formationPrecedente;
    
    public void suivreFormation(){
        Random SFM = new Random();
        Random SFP = new Random();
        int motMin = 5;
        int motMax = 25;
        int motResult = SFM.nextInt(motMax-motMin) + motMin;
        int proMin = 20;
        int proMax =30 ;
        int proResult = SFP.nextInt(proMax-proMin) + proMin;
        if(motivation < motResult){
            motivation = 0;
        }else{
            motivation -= motResult;
        }
        if(progression > proResult){
            progression = 100;
        }else{
            progression += proResult;
        }
    }
    
    public void bosserPlus(){
        Random SFM = new Random();
        Random SFP = new Random();
        int motMin = 10;
        int motMax = 30;
        int motResult = SFM.nextInt(motMax-motMin) + motMin;
        int proMin = 10;
        int proMax =30 ;
        int proResult = SFP.nextInt(proMax-proMin) + proMin;
        if(motivation > motResult){
            motivation = 100;
        }else{
            motivation += motResult;
        }
        if(progression >proResult){
            progression = 100;
        }else{
            progression += proResult;
        }
    }
    
    public  void echouer(){
        Random SFM = new Random();
        Random SFP = new Random();
        int motMin = 20;
        int motMax = 40;
        int motResult = SFM.nextInt(motMax-motMin) + motMin;
        int proMin = 20;
        int proMax =40 ;
        int proResult = SFP.nextInt(proMax-proMin) + proMin;
        if(motivation < motResult){
            motivation = 0;
        }else{
            motivation -= motResult;
        }
        if(progression > proResult){
            progression = 100;
        }else{
            progression += proResult;
        }
    }
    
    public  void reussir(){
        Random SFM = new Random();
        Random SFP = new Random();
        int motMin = 20;
        int motMax = 40;
        int motResult = SFM.nextInt(motMax-motMin) + motMin;
        int proMin = 10;
        int proMax =20 ;
        int proResult = SFP.nextInt(proMax-proMin) + proMin;
        if(motivation > motResult){
            motivation = 100;
        }else{
            motivation += motResult;
        }
        if(progression >proResult){
            progression = 100;
        }else{
            progression += proResult;
        }
    } 
    
    public static void main(String []args){
        eleve eleve1 = new eleve();
        eleve1.prenom = "tom";
        eleve1.nom = "jedusor";
        eleve1.sexe = "M";
        eleve1.formationPrecedente = "Poudlard";
        eleve1.age = 65;
        System.out.println("Bonjour "+ eleve1.sexe + " "+eleve1.nom + " "+ eleve1.prenom+". Vous avez "+ eleve1.age + " et votre derniere formation était à "+ eleve1.formationPrecedente);
        while(eleve1.motivation > 0 && eleve1.progression < 100){
            Random methode = new Random();
            int methMin = 1;
            int methMax = 4;
            int meth = methode.nextInt(methMax-methMin) + methMin;
            System.out.println("methode numéro "+meth + ".");
            switch (meth){
                case 1 : 
                    eleve1.suivreFormation();
                    break;
                case 2 : 
                    eleve1.bosserPlus();
                    break;
                case 3 : 
                    eleve1.echouer();
                    break;
                case 4 :
                    eleve1.reussir();
                    break;
                default : 
                    System.out.println("ca va?");       
            }
            System.out.println
            ("La motivation  est de "+ eleve1.motivation +", la progression est de "+ eleve1.progression);
        }
        if(eleve1.motivation == 0){
            System.out.println("Tu n'as plus de motivation :( "+eleve1.motivation);
        }else{
            System.out.println("Tu as bien travaillé et progressé, bravo :) "+eleve1.progression);
        }
    }
}
 