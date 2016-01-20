function SelectKT()
{
    var info="您确实要选择此课题吗？请注意，选择后您将无法更换！";
    if(UsConfirm(info))
    {
        return true;
    }
    else
    {
        return false;
    }
}