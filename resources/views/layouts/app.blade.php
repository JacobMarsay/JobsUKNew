<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>u1770275 - @yield('title')</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
        <?php $role=Auth::user()->role; ?>
        @if ($role == 2)
            <div class="navigation">
                <div class="navbar">
                    <svg width="187" height="85" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g filter="url(#a)">
                          <path fill="url(#b)" shape-rendering="crispEdges" d="M0 0h179v77H0z"/>
                        </g>
                        <defs>
                          <pattern id="b" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#c" transform="matrix(.00437 0 0 .01015 0 -.277)"/>
                          </pattern>
                          <filter id="a" x="0" y="0" width="187" height="85" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dx="4" dy="4"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_141_2347"/>
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_141_2347" result="shape"/>
                          </filter>
                          <image id="c" width="229" height="153" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOUAAACZCAYAAADQKf2sAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAABl0RVh0U29mdHdhcmUATWljcm9zb2Z0IE9mZmljZX/tNXEAAB2hSURBVHhe7V0JeF1VtV6Z7m3msWnSZmra0nkutgxFgdIyiBMKgvLUJ6ifYL/3wCcIDxFEfeKMT5BPRdEHjgyCUkspneg8pqVp06bznLFNM4/v/3dy683JHRKStOecrq3xs8095679r/XvNZ7TaO9TL3SILkVAEbANAtG2kUQFUQQUAYOAklINQRGwGQJKSpspRMVRBJSUagOKgM0QUFLaTCEqjiKgpFQbUARshoCS0mYKUXEUASWl2oAiYDMElJQ2U4iKowgoKdUGFAGbIaCktJlCVBxFQEmpNqAI2AwBJaXNFKLiKAJKSrUBRcBmCCgpbaYQFUcRUFKqDSgCNkNASWkzhag4ioCSUm1AEbAZAkpKmylExVEElJRqA4qAzRBQUtpMISqOIqCkVBtQBGyGgJLSZgpRcRQBJaXagCJgMwSUlDZTiIqjCCgp1QYUAZshoKS0mUJUHEVASak2oAjYDAElpc0UouIoAkpKtQFFwGYIKCltphAVRxFQUqoNKAI2Q0BJaTOFqDiKgJJSbUARsBkCSkqbKUTFUQSUlGoDioDNEFBS2kwhKo4ioKRUG1AEbIaAktJmClFxFAElpdqAImAzBJSUNlOIiqMIKCnVBhQBmyGgpLSZQlQcRUBJqTagCNgMASWlzRSi4igCSkq1AUXAZggoKW2mEBVHEVBSqg0oAjZDQElpM4WoOIqAklJtQBGwGQJKSpspRMVRBJSUagOKgM0QUFLaTCEqjiKgpFQbUARshoCS0mYKUXEUASWl2oAiYDMElJQ2U4iKowgoKdUGFAGbIaCktJlCVBxFQEmpNqAI2AwBJaXNFKLiKAJKSrUBRcBmCCgpbaYQFUcRcBQpO/z0FaG6UwRcioAjSNnU3i7Sih8yMQL/09FJz6joKInmn3UpAi5CwNakbAX52lpbJSs+Tq7OTpepaYmSHBMtJxqaZFPFGVl+skrqm1vEg79TarrIKi/yrdiWlE1t7RIdGSH3TiyUL4zJlcKkOKOqdjjJKHjHFnjPzZVn5AfvHpBFR06p17zIDdlN27clKZta2yTVGyNPzZ4ot+RnSWNbm9Q0t4p/Tgm+yqUZKfLCVdPkezv2mR+JjDRE1qUIOBkB25GyBR4yEeHor6+YIjfmDJWqppZuZPSBTY95tqVVYkDCR6eNkbiYKHl0SwlSzijjSXUpAk5FwFakbEcOyf98Z+ZYQ8hKEDLcagU560Dk+yeNklONLfL0u/sk0hOjOWY44PT3tkXAVqRsgee7dVSOfHZ0jpxGuBpuRSJcbUduuevQYVRlI2Xh5DGypbpW1h0vEy+8rS5FwIkI2MZym5A3ZifGyUNTRompuna1PYKBGokQtQOf2VG6X8qqqyUpKVHS6+vk4Znj5fbKamlAXhoN0upSBJyGgC1IiQ6kKat+bVKhXJIcL9VhwlZmjPSSRfsOyImas5JXWCjJKWlS39Euk9A+uXN8oTyzdbdEeSI1jHWaRaq8YgtStiBUvS43U+4cNcJUWcOtmJgY2XPshJSWlUv+qFESn54hLaAf89EKXH/HJfmy7Ogp2V15WrzRtthiuC3p7xWBcwhccItlvzF5iEcemTraVFIbUbQJVTuNiYqSCnjHzfsPSmpWtsQkJssZDBD4pnzYNmH19q4Jo+ShNdtMGHyxVWObgWEH0oFuC+G+Dlk4g/kXlJQkUDvG5xZOKZBZ6clSDXKFIiTzSLYh1+7ZJ62xcRIHD1mL4hBzS/9VjymgSbjfgvzh8vq+wxIFzzrYixI0W4kQ5ktjEIJzTwO52pEG5CfFS2FyIg4kkxiY76hvaZPtFdXSht8P8FeGFJ+HYisOCatiQ+2dVXi2xkJdExBvDpaE6FXTTJrbLYdVl/QeHPYDq4n3rtULSspmEGrWsFT50tg8qQWRwq0hINdbJaVyoKZW8saMkToYWEdrZx+TgPpTsxFkv2nkCNlSXiXHa+uFoA/WorKjoyJkeHyCIUD3I6Lnt/qUX4lxwQbsO2IAWdLS0iKfGJMvT86d0e2LD5yplRkv/kNq2lokBpXq87F4WCYgaklL9J7DxLf3ioZGaUQxzrp3XhOHlCPdcg0x5TUcLOGpwuinIKk73rx3DQ72mqbmHvc1REdUlp+YAOL+S0e8Jha2caS2zhQHB/qQfC84XzBStoJQQwD+owhbk6C4MyBoqJMqDp/ZV3Va7lu8Sm6eOU3yPV6paWwKumcqkQZxM4j5yx2lqCN1DBrgzW2t8EwpsuSWeZKMHmmnfwq+zFw9fj69+B15reSQeL2e96K7oNcEIvmFMLZmEOTjyO9/cc3sc5j4dHzL31fIWweOiRd4+S8e1DcV5sjz8y83RPY/cG969W1ZjVoBw6XcxHhZeet8SfF4zL19mD65aac8gbTFH1NDSBD13lmT5LHLppo0yacj2shf9x6SL7y5tjMDsoG7vGCk5KD5FzDXek12hskJQ2FBI2NY8oNVG3CiNcqKMw0ysrHZ9Ch9CiGg5+7BB0mAbz0UPC4lSWZkpsnGY2WMbXpn/Pgub28/23VHntwZsV4Z0geP7O3DZ3sneOenrOE8/y5ci6kv9+/LZ7nHRAvxeL0nBL7EPtA1/iOUPrxjo7qbML2s/yIWJORd08fJTz8wq8fBvOZEuSx8e4OZDvPgqSM7rAtCSoYgY9OS5b6JBSZkCBfuJcGTvFGyX/5cXCpR2SNkZ/VZWXO8XGYOSzPXhyJ0PX4/d8RQSccYXjNIHOww5Gnahl96QcjTCAGLqmr67Fk5+teXxe8Mt0gm5oE+uRl69bdw5X9PRN3mwOuLg7DKxDy/M9/veZdgewy192C/84erM6dsR+jZHUH/w8d4SBzed065RJ69dk4P+daeqJAPw/tWII2w07DJeSelCSOB48MYEhgeOyRscYcFgWrkEj9as0na45PEiwIPrFRWYmonK34IZl6j8ahlcONuQPHlBpD30fF5wucyA33UPx9lOLNwQ7FsKkM7BUTu7aLHZn7I0MhqPDT8vgwyGGPCyU1hozGYnw4PzPvSCKtx6reyjwtv4oFX6G06yj3y+nYYacQQr7knn0Vloay2Kw2Iwd6DhbnnZIJs0fB8aaiYUzcc9OC+61gB5zOvkDMa9+nvwdFb3IN9jhZBQn584ij51XWX9djX1vJqueX15VJR39gjhO7vd/f3+vNOSvYkbx2TIx/OyzRJebgTOh5e8rnVm6Wo8qxk5ubJabgzhjGVMCSedJch/KWxBVok5DjkHnPSEoSPgrHuFuj7fLlLCr7r76jW/t+2XRKNok1vF9s0x1BMuv6Vt42h+x8RTfC6V+Zkyc+uvrRXt2siGXGPq/Ky5SOjcmU6Qu987CEWoRUJdLCmTjaeqpBXSo/IRoRe/KzXEnYFIionphhe3zZtrFyPqvRIFEkYJp6EUe6oOC1/2nNQFiHH47Ler7O4IjIP+Tlz9ClD0yQnIc7IRFyroYtjdQ1SjEfp3j5yUjZAvgbuI8QKFST0IoAIi2UzvN/NYwvkdwuu6BEq76o6Ix99bZmcOFtnO0JyY+eVlGwZZGGU7uuTRxmPFa4gEosTt6S8Un63rViGZmVJQkK8tED5Z0HmmMgo2VVdI8PihphT33hLHxtgQPyzF+S9MTvVKIX9z1CL1dmTdfXyjSWrpLmxXbyJSWEV7/sAvQu9xSaSxLogayoigt6sJnjAQrRy/ufK6fJxVFADHSCjUxJlXl6W3D9jgrxYckAeWr0VU03djStQ3JABGRZ/bJ6MS+2+r+EgF3Puz0woNMS8d9lGqQDGvnCOh0QuCPwT5GMfG50XeBvJCTITv/kQCjQPXjpRHlu3Xb75zpbebHlwPgNCzoOHfPHGuebg8F/7UYX+6GvL5RBsZ6ALbAO1mfNGSmZzHSDKg5MLZSz6aOxJhlo87Vng+dX6IqmLjpHMjAyM1kXIiPhY2cveJC5mibsIUzuzYFTovnUrcNTidL+zIEtG4xCo40kfYtH4GQY/vmyN7MIbDTx5Bd1eO9IbsEnMQHlJE479Ib0oIDQBjxnw+i/d/H5T6g+3eNB8FgMSlw5Ll4/AyEppZL4h/ACspJfkT6h12yUFMgIkvQkev854bJFM4P36h6+WqUNTw4lkfs8wdwWLapw75mtcgqyQhb1efVPgDzG8n1YwXP5041Wm+u6/juPQ/djry6UE/Vq7EpLynjdSMke6LmeYfJqjdGFCGwoWj1L30r0HZeXRE5KbWyAxCC070AxPRq+SBnMIoQdzmnKcijz9suAxjbeEtlncmYjT+4bhaSa8CrcSce/lB47Isxt3SFTmMIngsEEIgwp3v77+vgURRDqM/w842YMRMthk0sT0FPn9DVfKtX950+TM/V1XDs+Uxy6fJv+5dJ251RffN7kHIXkY7kSoWgXseThkQfZR8OAk2puHTsiyQ8clBvluS3NzUHFClbjCl79wW1/OYfmG98PG7kGIzpzXf7FPe/uiVVKElMdr+V1/MRvo688LKanEFBQXzCgdGtdNHaHzjRgouqq+QV7cskNSMoZKKp4AMVroiDITPWMRglUiiefkDuuGh7sIyuICCw/MSe6Al0yEYdBjhlokNsPhx95eI83eOPEm4LsGwLj7oqh2yPjlqWPlEktoyXssR1/uJ1uKEVo3GMI+cOkkk2f6rzlZGXInwrVnt+wyfx2s+EM9/HDzLnnjwFETVVyL3PKBWRN7hHh3TRotPy8qkVIUQ5izW9cDCE1//M5WAfOMR4zDoTYNnvQWhNyLQUgq4EK9AIIhdKD1zPY9sn7/UfEgSgtb7u+L8gbhs4NOSh5oHKW7d/K/RulC7YOnLfO757cVSVlLu+TkZkkEwj//3lsyKpIT05Jk3alK8XTNy56A0abiBOQTJp8amS2zM5LDhq2UIwEG9Z0V62QDWiyevJE06a5jeBDQDnRLTr0g37sDRQnr2lxWKR/62zI5i7BLgMn6wydM1XnlJxYIc0v/dTtCz+d27IV3Cn7g/Tea6k+STOzlYZvv7D8mxO0ZNPf9ScSw7xrkraUo2AQqjc3PGy7l0xul5PRZMwlTXt8ka0D0NfuOYDwGvVoT1fTK3713kH3TAr28wz049N5AIWsnJrysAwu9vMV5+9igk5ITGpfjTXQLJ46Eh+wQesFQawjyxy0IWVcinMzPy5PYuFjkot3DMuaaU/B+Hlb8jnCEDqc1BxCacf8RcV75PKq7DPfChUhsUG86dkqeWrtNIjMyJQIh8/n2kmzv5MMD8se6ninaYwjp9RWKIO8J9E9f2L1fHp0ztdvHJ6DvOwyPrR1tPB0QXpLvl++WiuDg8g0tNIPov9+1X74GbzkK4b7/msEcErLxYLgBOZr/uh5/5k8r9MJD8BiIuaWsSpYcPimvonrdCF3Yqe9H2TkP/NsFl8u8vy4xVX+7DAoEUtagkpLEiPeg7zc+X9qRN5U1hB84r2prlFe3FyNszZDMNBZwuHr2C5nLzEX+85fSw6a4wM+dRkj7GELkkShWnA5TSGLrgjnoY2+vlhrc35uU3G9CBhtMCHY4mGIHZE+LJVF6HlbMm03BxH/hc3vgoawrGd4pnn3VIB6KRQ7m4lF+c68cROD86SHMEltJmYZ0g+HpM9tK5IMjc0x4al3svQ6FZ+TPNLRJ/n3iaFmBcPvzb66RfcjhuBgyB1pxLH4FkhV/x71YF22JL1Drz5qFotjT8+bIp/6x0gxkcP92XINKSpoTH0Z+YvUW+UYl2gVhii6c7UmAsmYX5MnI3BxTcGHFNtiagBB2FoyBo1JU8FXDM+T2kcPNyFS4lQSj+8WGIlmKkCYmN7/P1Vbr/c2ESVePsVufL0hBgtfTMJgAsjBFr2MdmjejZlbDxTWpAYyWBtsSAiveyxxE5wYTO1MrVo0DkYB9TYbMHOZf8Mpb8sjsKXILWiLZKOqEWiy0PIfe4IKX3wLhW820TKA1OSNVXoGX9l9G08BhpiVn5l9zcqscQyS9mZZgreH7mIH9yrTxPQo+TBOKEMI+ubZIImEDdqTloJIyAoRsQon63fKTeLsVTv1w4yc0QFyTPzZOpqC4wxctB3CSRo9UIIs08/OzMXZ3RuoQRj2Il2cNgSdhdTcU2Gx/sCz+PczSSmo6XrSFPmLXY07hyBzo9xS7GUMC986cIHvRmli85xA68J7OqRb8/ZjU7vmf7x5VeNEXJ3OOnK03kzrDEKr7Lw4PvFK8DxXkNrPXFhat8PkPFeb2EOMQepVlGATo4Vm7PslhgdkoCC1DZNGGSrU5FECYmcjZx+Nws64SjDKSIGwdlMHrfeWNVfI4QmRWeyeil8qBcHNPFILyEJn4D8FfNSJTJiG92ASvWYxGPQc90ul5/dZn0M5h8aX8DL7H92gd9D0a01eB+qG7cZ8TtQ1mJNA8khbksOOAxd1L1sofURw7VFMvz82/rMfevo3q8rtopb0BPXktcr0X/Q/0NYNKSp7yEThtvcjXpGcRL+Be+Ha6FZW1MhuKzIaRhgtZ0pArzMvNlrTIDpmLx8DoJUMR0sxoQrHfXr5WTjW1iRfX9Lcc1wxZb0XF8mcfuNSQ66sw0pfx5AH7ozOQe/3H9PE99noGn9uPh7VZdCkDKZfhhdKftBR7PjV2pJm2eRaVUO4rFQb0VTTneRBZ15uHj0stPUmQkIykfvqa98nn4EU2nqw0Nj0D5Hl23mzzqJR1MQzlIcppnnuQc1YhNXgJe1rOn90kRecBGotcdN0nr0eO3z28zWQejN8fBaF5LyvRCnEd+5/fRPGpGAcZdTYdUc8TGJzI7Do0/GX6ByKaRsjAdkaoKPa5naXyxx178PB7gvxme4lMwAHyVRyW/oth93MYvZuLg2cv304RYGB+oInWl/sNLikpCb0FHrPq7aJAZ5qa5HUo4T5M9nvbo0zOGGwxYrsNb8CbleAxYWC44k6S1yt/2rFb/goPFD0c5XO8J7Y/XpIh67XwaFQyF0PLX+P/fx2tCxJ0MjxLoOGBlWiwH4N3Y+GrBQ/e/nBzsXxkdG63p0yY83wfz0XeDcJzjK8AhkzvZF30RE+DuDwAe7xxwO/D4+DpVty6QLagak3c2FqxTrzw40sxKrcWVV7qLh/f+eTcmSBulBTPnmyupfdjWEr5SEZrb5X532HI6xsgeAp5aSDvR8+9CFNGlJ+HZaCwnPIwbP0NyMYqfLhV1YDeKKa9OGgSicPmwVWbTavJ2iphVPL766+Q+S8tQUvMPk+IcH+DT0p+Sx/L45wlXYcm74bhqPyhl8ZqWaDli2DGx0ZLUjRG6fhUfQitxUJJR+Gdnli2ViQpRaI43N6PsJVFjHSc6s+jqhdvmR6xtiz8xaLcP0JPkY+excDQPCiGbQIJ7l+xWX4Ob2ZdNKpAPUx+jgS4B48e7Ucz34MDgaOMoeBmpXpO9tCgKDH8+xoMuZWhMm7EA8EUZbBY4eVPuPXy3sNSjB5nNA6cSFy7Ar3Lb2/YIQ9jECHQsoa21s8sxOhfj7G4IC0R83hXlxHwwGtCZHA3Ck+Fn5iPt1GkdLs1D4WfXo3oYdE7wDHygg/R+4Q7P6QMp0XL73lq0sG+WHJQLgNwDIUChbGsxaWjmpQGRTSFISRzHhZgnlwJAz6L2U6O0vVzMQziU+7fWr9dfgBvktDLMOi+lZtkOQzV0/V52lAM/v/TW3eZauV3EcKFM1SKTu9534pN8mcUTEhI34EUqKpIrx3ME/lgYE76ORjwFvRs+QoV5uc3B2nGB4PuLfRSv7IMuTqW70mRaByGj6zeZuR7KAgxA92Ph/H9KzfLH7k/tqssiyG5dVmfcuGL08qA053/fAcPoV8nGZYckqOKu9Fm+t46FH78MOynafTrcluSkjtiJfI4wrsXQMzH50wx5Xz/4iK9jSeiQ7Lw7Edvhsv4TOZijO09X7QLo3TIyZhH9XNyh0bWDsN4Fq+z3HCqSv4LucsC5HumnWBZHPdbf7LCVAX/jmILH5Py9+o0Jv7dL3Gvleid3jN1nHywcETAcLUUxZG/oVH/vwgLDyKU9Cckv5ZPzfDH92whq64vwXstwUHwCLC0egz2MJmzMYTejcok78fFA+Lf/rnavD2AEctoPDDOwQ3ronfdidzs+eL9Jsxk1dX/LYKdr9+IkIdXbcFTJKdkIdKSuchngx0SlIeTQT9GNLEdmPHAstYIGQ2cRXGv8/2/nRLxEAj0niQWq7bhoPnS0vXy63mXIZ3AS7y7rqFjfQRhOfuxbx08bov+qm1JSZD5XN5r+44ag7i+IBu5ZlcYS08Kg0nE+2ZQ3wk7NcWeZhW8wDeXrsYLt/DIEh/L6ichfYbJs5pK3wrjuQP9r9EI7yajuDAKBszJGHr4g+gDluA0ZsWPM8D0kIHCbDPUjkJGSWWNLMTs6RMb4uUSTO5wtpT34oAEx+32oDBSyZyNRTRLe4QG/Ac8PcLxPH9SMgc8BAIvhicjKdnaYKjHaZw9p2vkCHuf/H7/++HPbB8UYW/f8uyQwpQEcx1feZIAT0rSVqP4cpwy4R7N8MZRkJOvebHm9owq+B7epQePyVLIMAYVX4bCzJGTQHQSqwq55b7TtbITr30JKE8X6DywKxsb5bqXl3Z73w5JeQrjmcTAujyoJbBQVQwd8O0Q/gc5e8TcB1MJOyxbk5IgN6EI8qNtu+WqnEzjgTpfQYnJIBhAZAcLO+E7TfFQ0ndXrJcd5afFk89RuoFfnGChYfFpjVJUTLsfFZCRD/9C6b2p9PHharS2QZhGVGbRSjIW3jWawFvxPkHe60Nin8J1J1DR7bb4ihMQnnO+q1HI8X/MzTwwHeSgMB4P/yXBdyNv3Y1csRvjTG7XtbcumYIV2/hR7p+Fu704pPZCHz2OVLrEEPJwT7wPe7I7Kqp6XB6JawOFtabeCDLuwh4CJd1s34V6RcnAW0zwO9qalBSbxr6rDD3FjTvlh1dMg0KRSTY1SgQLGmH6njQODsKvwun8zMbtg/4ECMUxgwMDcOLS8IyR9PFdQcTMGGWAfOvc7+Cx+rp4QPJfzg7aOO7DDU1E0E+cDMH7+KLtzmvs4Q1DwWV7UlJ4hrG/QQtjekq83I1/QLaK79rpBSHjEWKVI7R6YNFyaYgZckGeAOmDrepHFQGDgCNIaaY4mpvkgaVrJRme8rZxI/HenqaQb2hLRLWuFs/zffmVf8o2eFpvAcJWErmP7Rm1E0XgfCPgCFISFOY89VUV8sU/vy7lC94vd82aIhEgWB3G2Jij+DJL9jgTUTgoQUJ/32tLZCkqnZ78Ahw/qCj2oyd5vhWj33fxIuAQUiI7xPs9vXgrQMPJ43L/q4tl5f4j8uXLZsj04UMl3u/9qSdRlfzt1p3yYzwjeRzFDk9OnkTEodqqhLx4rdxhO3cIKYEqw84YPOKE9762ITT9W9FOWbS7VKbnZMvEYRnmHTtHUdbns5iHKyrxPpF48eDtdxHxGAYPNXvnMIWpuO5HwDmkpC5ITDwEHTV0mERiRK71TLWsP3hE1pce6NQUK47eIeLBv8YVkYwBac7cag7pfit22Q6dRUofMTFwHIHZ1RiGpWiPdLRiCJnekP9yEkhJj6pFHZdZ6kW0HeeR0kdMUztmYzuh5/gAvaN6yIvIjN21VWeS0qcDJZ67rFF3YxBwNilViYqACxFQUrpQqbolZyOgpHS2/lR6FyKgpHShUnVLzkZASels/an0LkRASelCpeqWnI2AktLZ+lPpXYiAktKFStUtORsBJaWz9afSuxABJaULlapbcjYCSkpn60+ldyECSkoXKlW35GwElJTO1p9K70IElJQuVKpuydkIKCmdrT+V3oUIKCldqFTdkrMRUFI6W38qvQsRUFK6UKm6JWcjoKR0tv5UehcioKR0oVJ1S85GQEnpbP2p9C5EQEnpQqXqlpyNgJLS2fpT6V2IgJLShUrVLTkbASWls/Wn0rsQASWlC5WqW3I2AkpKZ+tPpXchAkpKFypVt+RsBJSUztafSu9CBJSULlSqbsnZCCgpna0/ld6FCCgpXahU3ZKzEVBSOlt/Kr0LEVBSulCpuiVnI6CkdLb+VHoXIqCkdKFSdUvORkBJ6Wz9qfQuREBJ6UKl6pacjYCS0tn6U+ldiICS0oVK1S05GwElpbP1p9K7EAElpQuVqltyNgJKSmfrT6V3IQJKShcqVbfkbAT+H9ZMVQd/8O94AAAAAElFTkSuQmCC"/>
                        </defs>
                    </svg>
                    <div class="nav_content">
                        <ul>
                            <li> <a href="/posts">Dashboard</a>
                            <li><a class="navbar_link" href="/posts/create">Add Job Post</a></li>
                            <li><a class="navbar_link" href="/posts">My Job Posts</a></li>
                            <li><a class="navbar_link" href="/">Settings</a></li>
                            <li><a class="navbar_link" href="/logout">Logout</a></li>
                        </ul>
                    </div>
                    <div class="nav_bottom">
                        <div class="logo_bottom">
                            <svg width="179" height="174" viewBox="0 0 179 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="179" height="174" fill="#0792A5"/>
                                <path d="M117.185 95.7983L95.0427 55.9735L92.008 53.5228L88.0179 51.4805H81.8361L76.7782 53.0122L73.9121 55.9735L95.0427 95.7983H117.185Z" fill="#FAFAFA"/>
                                <path d="M117.185 95.7983L95.0427 55.9735L92.008 53.5228L88.0179 51.4805H81.8361L76.7782 53.0122L73.9121 55.9735L95.0427 95.7983H117.185Z" fill="url(#paint0_linear_329_2)"/>
                                <path d="M54.8325 76.0024L76.8831 115.972L79.9147 118.436L83.9044 120.493L90.0954 120.509L95.1656 118.987L98.0453 116.026L77.0078 76.0596L54.8325 76.0024Z" fill="#FAFAFA"/>
                                <path d="M54.8325 76.0024L76.8831 115.972L79.9147 118.436L83.9044 120.493L90.0954 120.509L95.1656 118.987L98.0453 116.026L77.0078 76.0596L54.8325 76.0024Z" fill="url(#paint1_linear_329_2)"/>
                                <g filter="url(#filter0_d_329_2)">
                                <path d="M66.1442 55.906L44 96.0073H66.1442C78.443 76.0893 88.2895 48.6309 95.05 55.906C83.0331 37.0025 71.3698 46.4799 66.1442 55.906Z" fill="#E5E5E5"/>
                                </g>
                                <g filter="url(#filter1_d_329_2)">
                                <path d="M105.756 116.047L128 76.0381L105.881 75.981C93.5341 95.8495 83.6131 123.258 76.883 115.972C88.8273 134.89 100.507 125.451 105.756 116.047Z" fill="#E5E5E5"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_329_2" x="40" y="45" width="59.0498" height="65.0078" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="10"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_329_2"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_329_2" result="shape"/>
                                </filter>
                                <filter id="filter1_d_329_2" x="72.8828" y="75.9814" width="59.1172" height="64.9248" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="10"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_329_2"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_329_2" result="shape"/>
                                </filter>
                                <linearGradient id="paint0_linear_329_2" x1="95.5485" y1="51.4805" x2="95.5485" y2="95.7983" gradientUnits="userSpaceOnUse">
                                <stop offset="0.147377" stop-color="#0792A5" stop-opacity="0.11"/>
                                <stop offset="0.997833" stop-color="#0792A5"/>
                                <stop offset="1" stop-color="#0792A5"/>
                                </linearGradient>
                                <linearGradient id="paint1_linear_329_2" x1="76.3625" y1="120.473" x2="76.4772" y2="76.0583" gradientUnits="userSpaceOnUse">
                                <stop offset="0.147377" stop-color="#0792A5" stop-opacity="0.11"/>
                                <stop offset="0.997833" stop-color="#0792A5"/>
                                <stop offset="1" stop-color="#0792A5"/>
                                </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>          
            </div>
        @elseif($role == 1)
        <div class="navigation">
            <div class="navbar">
                <svg width="187" height="85" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g filter="url(#a)">
                      <path fill="url(#b)" shape-rendering="crispEdges" d="M0 0h179v77H0z"/>
                    </g>
                    <defs>
                      <pattern id="b" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#c" transform="matrix(.00437 0 0 .01015 0 -.277)"/>
                      </pattern>
                      <filter id="a" x="0" y="0" width="187" height="85" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dx="4" dy="4"/>
                        <feGaussianBlur stdDeviation="2"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                        <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_141_2347"/>
                        <feBlend in="SourceGraphic" in2="effect1_dropShadow_141_2347" result="shape"/>
                      </filter>
                      <image id="c" width="229" height="153" xlink:href="data:image/png;base64,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"/>
                    </defs>
                </svg>
                <div class="nav_content">
                    <ul>
                        <li><a class="navbar_link" href="/applications">Dashboard</a></li>
                        <li><a class="navbar_link" href="/">Find Jobs</a></li>
                        <li><a class="navbar_link" href="/application">My Application</a></li>
                        <li><a class="navbar_link" href="/">Settings</a></li>
                        <li><a class="navbar_link" href="/logout">Logout</a></li>
                    </ul>
                </div>
                <div class="nav_bottom">
                    <div class="logo_bottom">
                        <svg width="179" height="174" viewBox="0 0 179 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="179" height="174" fill="#0792A5"/>
                            <path d="M117.185 95.7983L95.0427 55.9735L92.008 53.5228L88.0179 51.4805H81.8361L76.7782 53.0122L73.9121 55.9735L95.0427 95.7983H117.185Z" fill="#FAFAFA"/>
                            <path d="M117.185 95.7983L95.0427 55.9735L92.008 53.5228L88.0179 51.4805H81.8361L76.7782 53.0122L73.9121 55.9735L95.0427 95.7983H117.185Z" fill="url(#paint0_linear_329_2)"/>
                            <path d="M54.8325 76.0024L76.8831 115.972L79.9147 118.436L83.9044 120.493L90.0954 120.509L95.1656 118.987L98.0453 116.026L77.0078 76.0596L54.8325 76.0024Z" fill="#FAFAFA"/>
                            <path d="M54.8325 76.0024L76.8831 115.972L79.9147 118.436L83.9044 120.493L90.0954 120.509L95.1656 118.987L98.0453 116.026L77.0078 76.0596L54.8325 76.0024Z" fill="url(#paint1_linear_329_2)"/>
                            <g filter="url(#filter0_d_329_2)">
                            <path d="M66.1442 55.906L44 96.0073H66.1442C78.443 76.0893 88.2895 48.6309 95.05 55.906C83.0331 37.0025 71.3698 46.4799 66.1442 55.906Z" fill="#E5E5E5"/>
                            </g>
                            <g filter="url(#filter1_d_329_2)">
                            <path d="M105.756 116.047L128 76.0381L105.881 75.981C93.5341 95.8495 83.6131 123.258 76.883 115.972C88.8273 134.89 100.507 125.451 105.756 116.047Z" fill="#E5E5E5"/>
                            </g>
                            <defs>
                            <filter id="filter0_d_329_2" x="40" y="45" width="59.0498" height="65.0078" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="10"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_329_2"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_329_2" result="shape"/>
                            </filter>
                            <filter id="filter1_d_329_2" x="72.8828" y="75.9814" width="59.1172" height="64.9248" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="10"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_329_2"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_329_2" result="shape"/>
                            </filter>
                            <linearGradient id="paint0_linear_329_2" x1="95.5485" y1="51.4805" x2="95.5485" y2="95.7983" gradientUnits="userSpaceOnUse">
                            <stop offset="0.147377" stop-color="#0792A5" stop-opacity="0.11"/>
                            <stop offset="0.997833" stop-color="#0792A5"/>
                            <stop offset="1" stop-color="#0792A5"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_329_2" x1="76.3625" y1="120.473" x2="76.4772" y2="76.0583" gradientUnits="userSpaceOnUse">
                            <stop offset="0.147377" stop-color="#0792A5" stop-opacity="0.11"/>
                            <stop offset="0.997833" stop-color="#0792A5"/>
                            <stop offset="1" stop-color="#0792A5"/>
                            </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>          
        </div>    
            
        @endif

        <div class="content_container">
            <div class="content">
                @yield('content')
            </div>
        </div>

        
    </body>
</html>