<?
#####################################################
#
# 26.07.2007 ��������� ������������. ���������� �������� ������ �����, � ������ ������ ��������� �������... ������ ������ ����� ���������� ���������� ���������� �������
# ������� ������ ������������� ���������
# webi.ru
#
# $nachalo_ssilki ��� ������ ������ �������� ��������( <a href="index.php?admin=prov_0 ) � ������ � ���� ������ ����� ������������� ��� ���������� ��������...
# $kol_vidimyx_stranic ���������� �������(1|2|3|4) �������, � ����� ����� ���������� ������ >>>
# $kol_dannix ��� ���������� ������. ����� ����������, ������� ����� ������� �� ��������
# $kol_dannix_na_stran ���������� ������ �� ���� ��������
# $st �������� � ������ ������ ��������
# $name_st_var ��� ����������, ��� ������� �������
# $rewrite - ���������� ��� ����� ������������� ������, ������������ ��� �����������
# $end_stat �������� ����������� ������...
function g_webi_razbitye_stranicy(
    $st, $nachalo_ssilki, $kol_vidimyx_stranic, $kol_dannix, $kol_dannix_na_stran, $name_st_var = "st", $rewrite = 0,
    $end_stat = ""
) {

    $return = ""; // ���������� ��� ����� ������
    if($kol_dannix > $kol_dannix_na_stran) {
        $ostatok = $kol_dannix % $kol_dannix_na_stran;
        $kolichestvo_stranic = ($kol_dannix - $ostatok) / $kol_dannix_na_stran;
        if($ostatok
            > 0
        ):    # ���� ������� ��� ������ ����, ������ �������� ��� ��������� �����, ��� ������� ����� ��� ���� ��������
            $kolichestvo_stranic++;
        endif;

        if($kolichestvo_stranic
            > $kol_vidimyx_stranic
        ) # ���� ������ ���������� ������� �������, �������� ������� ������ �������� � >>>
        {
            $kol_stranic_s_leva = ceil($kol_vidimyx_stranic / 2);

            if($st
                > $kol_stranic_s_leva
            )  # (��������� ����� �����)���� ������� �������� ���� �����, �� i ������ ������ ��������, � ���� ������ �����, �� i ����� 0
            {
                $i = $st - $kol_stranic_s_leva;
                $menshe = $i;
            }
            else {
                $i = 0;
            }

            # ��������� ������ �����
            if($i + $kol_vidimyx_stranic < $kolichestvo_stranic) {
                $bolshe = $i + $kol_vidimyx_stranic + 1;
                if($bolshe > $kolichestvo_stranic) {
                    $bolshe = $kolichestvo_stranic;
                }
                $kolichestvo_stranic = $i + $kol_vidimyx_stranic;
            }
        }

        else {
            $i = 0;
        }

        if($menshe < 1):$menshe = 1; endif;
        if($i > 0) # ���� ����� � ������ �������� 1 2 3 4... �� <<< �������� �� ����
        {
            if($rewrite) {
                $return .= $nachalo_ssilki . "" . $menshe . $end_stat . "\"><<<</a>  ";
            }
            else {
                $return .= $nachalo_ssilki . "&" . $name_st_var . "=" . $menshe . "\"><<<</a>  ";
            }
        }

        // ���������, ���� ������� ������� ���������� ������, ��� �����(����� ��� ��������� �������� ���������), ����� $i ������ �����, ����� ���������� ������� �������, ������� ����� �������...
        if(($kolichestvo_stranic - $i) < $kol_vidimyx_stranic) {
            $i = $kolichestvo_stranic - $kol_vidimyx_stranic;
            if($i < 0) {
                $i = 0;
            } // ���� ���� ������� �� ����� ����, ����� i ����� � �����, �� ������� �� ����..
        }

        while($i < $kolichestvo_stranic) {
            $iii = $i + 1;

            if($st == $iii)# ��� ������� ������� ���� ������, ���� ������ �����(���� ������ ������ �������)
            {
                $return .= " <b>$iii</b>  ";
            }
            else {
                if($rewrite) {
                    $return .= $nachalo_ssilki . "" . $iii . $end_stat . "\">$iii</a>  ";
                }
                else {
                    $return .= $nachalo_ssilki . "&" . $name_st_var . "=" . $iii . "\">$iii</a>  ";
                }
            }

            $i++;
        }
        if($bolshe) {
            if($rewrite) {
                $return .= $nachalo_ssilki . "" . $bolshe . $end_stat . "\">>>></a>";
            }
            else {
                $return .= $nachalo_ssilki . "&" . $name_st_var . "=" . $bolshe . "\">>>></a>";
            }
        }

        return $return;
    }
}

############################################################
?>